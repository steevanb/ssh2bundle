<?php

namespace steevanb\SSH2Bundle\Factory;

use steevanb\SSH2Bundle\Model\Profile;
use steevanb\SSH2Bundle\Model\Connection;

/**
 * Service for SSH2 connections
 */
class ConnectionFactory
{
    /**
     * @param array $args
     * @param bool $autoConnect
     * @return Connection
     */
    public function connect(array $args, $autoConnect = true)
    {
        $profile = new Profile($args);
        return new Connection($profile, $autoConnect);
    }
}
