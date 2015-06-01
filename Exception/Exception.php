<?php

namespace steevanb\SSH2Bundle\Exception;

use steevanb\SSH2Bundle\Entity\Profile;

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
    public function __construct($message, Profile $profile = null)
    {
        if ($profile instanceof Profile) {
            $message = '[' . $profile->getLogin() . '@' . $profile->getAddress() . ':' . $profile->getPort() . '] ' . $message;
        } else {
            $message = '[No profile specified] ' . $message;
        }

        parent::__construct($message);
    }
}
