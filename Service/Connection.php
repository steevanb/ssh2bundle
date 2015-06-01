<?php

namespace steevanb\SSH2Bundle\Service;

use steevanb\SSH2Bundle\Entity\Profile;
use steevanb\SSH2Bundle\Entity\Connection as EntityConnection;

/**
 * Service for SSH2 connections
 */
class Connection
{
    /**
     * Return new connection
     *
     * @param string $address
     * @param string $login
     * @param string $password
     * @param int $port
     * @param boolean $autoConnect
     * @return EntityConnection
     */
    public function connect($address, $login, $password, $port = 22, $autoConnect = true)
    {
        $profile = new Profile();
        $profile->setAddress($address);
        $profile->setLogin($login);
        $profile->setPassword($password);
        $profile->setPort($port);
        return new EntityConnection($profile, $autoConnect);
    }
}
