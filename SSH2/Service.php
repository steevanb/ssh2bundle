<?php
namespace kujaff\SSH2Bundle\SSH2;

/**
 * Service for SSH2 connections
 */
class Service
{

	/**
	 * Return new connection
	 *
	 * @param string $address
	 * @param string $login
	 * @param string $password
	 * @param int $port
	 * @param boolean $autoConnect
	 * @return Connection
	 */
	public function connect($address, $login, $password, $port = 22)
	{
		$profile = new Profile();
		$profile->setAddress($address);
		$profile->setLogin($login);
		$profile->setPassword($password);
		$profile->setPort($port);
		return new Connection($profile, true);
	}

}