<?php

namespace steevanb\SSH2Bundle\Exception;

/**
 * SSH2 connection exception
 */
class ConnectionException extends \Exception
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
            $message = '[' . (string)$profile . '] ' . $message;
        } else {
            $message = '[No profile specified] ' . $message;
        }

        parent::__construct($message);
    }
}
