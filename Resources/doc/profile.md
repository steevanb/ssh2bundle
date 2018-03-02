Entity\Profile
--------------

```php
# constructor
__construct([
    'adrress' => $address,
    'port' => $port,
    'login' => $login,
    'id-rsa-pub' => $id_rsa_pub,
    'id-rsa-pem' => $id_rsa_pem
])

As the user who exec comand is www-data you have to create you keys using www-data user,
the simplest is to temporary allow bash for this user by editing /etc/passwd


# address
setAddress($address) : Profile
getAddress() : string

# login
setLogin($login) : Profile
getLogin() : string

# password
setPassword($password) : Profile
getPassword() : string

# port
setPort($port) : Profile
getPort() : int
```

See [Entity\Connection](connection.md)

[Back to index](../../README.md)
