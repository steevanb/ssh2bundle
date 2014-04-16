<?php
namespace kujaff\SSH2Bundle\SSH2;

use kujaff\SSH2Bundle\SSH2\Profile;

/**
 * SSH2 connection
 */
class Connection
{
	const STATE_NOT_ESTABLISHED = 0;
	const STATE_INVALID_ADDRESS = 1;
	const STATE_INVALID_LOGIN = 2;
	const STATE_CONNECTED = 3;
	/**
	 * @var Resource
	 */
	private $connection;

	/**
	 * @var int
	 */
	private $state = self::STATE_NOT_ESTABLISHED;

	/**
	 * @var Profile
	 */
	private $profile;

	/**
	 * Assert connection is established
	 *
	 * @throws Exception
	 */
	private function _assertConnected()
	{
		if ($this->getState() != self::STATE_CONNECTED) {
			throw new Exception('Not connected.', $this->getProfile());
		}
	}

	/**
	 * Constructor
	 *
	 * @param Profile $profile
	 */
	public function __construct(Profile $profile, $autoConnect = true)
	{
		$this->profile = $profile;
		if ($autoConnect) {
			$this->connect();
		}
	}

	/**
	 * Do the connection
	 */
	public function connect()
	{
		$profile = $this->getProfile();
		$this->connection = @ssh2_connect($profile->getAddress(), $profile->getPort());
		if ($this->connection === false) {
			$this->state = self::STATE_INVALID_ADDRESS;
		} else {
			$auth = @ssh2_auth_password($this->connection, $profile->getLogin(), $profile->getPassword());
			if ($auth === false) {
				$this->state = self::STATE_INVALID_LOGIN;
			} else {
				$this->state = self::STATE_CONNECTED;
			}
		}
	}

	/**
	 * Return state
	 *
	 * @return int
	 */
	public function getState()
	{
		return $this->state;
	}

	/**
	 * Return connection profile
	 *
	 * @return Profile
	 */
	public function getProfile()
	{
		return $this->profile;
	}

	/**
	 * Execute a command
	 *
	 * @param string $command
	 */
	public function exec($command)
	{
		$this->_assertConnected();

		$stream = ssh2_exec($this->connection, $command);
		stream_set_blocking($stream, true);
		$streamOut = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
		return stream_get_contents($streamOut);
	}

	/**
	 * Execute a command and explode the result
	 *
	 * @param string $command
	 * @param string $separator
	 */
	public function execExplode($command, $separator = ' ')
	{
		return explode($separator, $this->exec($command));
	}

	/**
	 * Execute a command, explode the result, and return the $index part of the explode
	 *
	 * @param string $command
	 * @param int $index Index of the part to return
	 * @param string $separator Separator
	 * @param mixed $default Default value if $index is not found
	 */
	public function execExplodeIndex($command, $index, $separator = ' ', $default = null)
	{
		$parts = $this->execExplode($command, $separator);
		return (array_key_exists($index, $parts)) ? $parts[$index] : $default;
	}

	/**
	 * Execute a command and return the result by line
	 *
	 * @param type $command
	 * @return array
	 */
	public function execLines($command)
	{
		$result = $this->exec($command);
		$result = str_replace("\r\n", "\n", $result);
		return explode("\n", $result);
	}

	/**
	 * Execute a command and return the line $index
	 *
	 * @param string $command
	 * @param int $index Index of the line to return
	 * @param string $default Default value
	 * @return string
	 */
	public function execLine($command, $index, $default = null)
	{
		$lines = $this->execLines($command);
		return (array_key_exists($index, $lines)) ? $lines[$index] : $default;
	}

}