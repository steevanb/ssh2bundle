<?php

namespace steevanb\SSH2Bundle\Entity;

/**
 * Connection profile
 */
class Profile
{
    /** @var string */
    protected $address;

    /** @var int */
    protected $port;

    /** @var string */
    protected $login;

    /** @var string */
    protected $password;

    /**
     * @param string $address
     * @param string $login
     * @param string $password
     * @param int $port
     */
    public function __construct($address = null, $login = null, $password = null, $port = 22)
    {
        $this->setAddress($address);
        $this->setLogin($login);
        $this->setPassword($password);
        $this->setPort($port);
    }

    /**
     * Define address
     *
     * @param string $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
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
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
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
     * @return $this
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
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
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
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
