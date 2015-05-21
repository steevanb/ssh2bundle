<?php

namespace steevanb\SSH2Bundle\Entity;

/**
 * Connection profile
 */
class Profile
{
    /**
     * @var string
     */
    protected $address;

    /**
     * @var int
     */
    protected $port;

    /**
     * @var string
     */
    protected $login;

    /**
     * @var string
     */
    protected $password;

    /**
     * Define address
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Return address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Define port
     *
     * @param int $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * Return port
     *
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Define login
     *
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * Return login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Define password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Return password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}
