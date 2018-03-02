<?php

namespace steevanb\SSH2Bundle\Entity;

/**
 * Connection profile
 */
class Profile
{
    const ADDRESS = 'address';
    const PORT = 'port';
    const LOGIN = 'login';
    const PASSWORD = 'password';
    const ID_RSA_PUB = 'id-rsa-pub';
    const ID_RSA_PEM = 'id-rsa-pem';
    const PASSPHRASE = 'passphrase';

    /** @var string */
    protected $address;

    /** @var int */
    protected $port = 22;

    /** @var string */
    protected $login;

    /** @var string */
    protected $password;

    /**
     * @var string
     */
    protected $id_rsa_pub;

    /**
     * @var string
     */
    protected $id_rsa_pem;

    /**
     * @var string
     */
    protected $passphrase;

    /**
     * Profile constructor.
     * @param array $args
     */
    public function __construct(array $args)
    {
        foreach ($args as $key => $val) {
            if ($key === self::ADDRESS ||
                $key === self::PORT ||
                $key === self::LOGIN ||
                $key === self::PASSWORD ||
                $key === self::PASSPHRASE) {

                $this->{$key} = $val;

            } elseif ($key === self::ID_RSA_PUB ||
                $key === self::ID_RSA_PEM) {

                $key = str_replace('-', '_', $key);
                $this->{$key} = $val;

            } else {
                throw new \InvalidArgumentException(
                    sprintf('%s is not a valid property in constructor %s',
                        $key,
                        self::class
                    )
                );
            }
        }
    }

    /**
     * Return address
     *
     * @return string
     */
    public function getAddress() : string
    {
        return $this->address;
    }

    /**
     * Return port
     *
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }

    /**
     * Return login
     *
     * @return string
     */
    public function getLogin() : string
    {
        return $this->login;
    }

    /**
     * Return password
     *
     * @return string
     */
    public function getPassword() : ?string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getRsaPubKey() : ?string
    {
        return $this->id_rsa_pub;
    }

    /**
     * @return string
     */
    public function getRsaPemKey() : ?string
    {
        return $this->id_rsa_pem;
    }

    /**
     * @return string
     */
    public function getPassphrase() : ?string
    {
        return $this->passphrase;
    }

    public function __toString()
    {
        return $this->login .'@' . $this->address . ':' .(string) $this->port;
    }
}
