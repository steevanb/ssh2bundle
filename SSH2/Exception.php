<?php
namespace kujaff\SSH2Bundle\SSH2;

/**
 * SSH2 exception
 */
class Exception extends \Exception
{

	/**
	 * {@inherited}
	 */
	public function __construct($message, $profile)
	{
		$message = '[' . $profile->getLogin() . '@' . $profile->getAddress() . '] ' . $message;
		parent::__construct($message);
	}

}