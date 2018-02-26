<?php
/**
 * Created by PhpStorm.
 * User: adrien
 * Date: 26/02/18
 * Time: 22:45
 */

namespace steevanb\SSH2Bundle\Factory;

use steevanb\SSH2Bundle\Model\Profile;
use steevanb\SSH2Bundle\Model\Connection;

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