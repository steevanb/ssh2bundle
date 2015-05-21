<?php

namespace steevanb\SSH2Bundle\Exception;

use \steevanb\SSH2Bundle\Entity\Profile;

/**
 * SSH2 exception
 */
class Exception extends \Exception
{

    /**
     * Constructor
     *
     * @param string $message
     * @param Profile $profile
     */
    public function __construct($message, Profile $profile)
    {
        $message = '[' . $profile->getLogin() . '@' . $profile->getAddress() . '] ' . $message;
        parent::__construct($message);
    }
}
