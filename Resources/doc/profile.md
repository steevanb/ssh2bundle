Entity\Profile
--------------

```php
# constructor
__construct(array $args)
possible key value are :
    - address
    - port
    - login
    - password
    - id-rsa-pub
    - id-rsa-pem
    - passphrase

# address
getAddress() : string

# login
getLogin() : string

# password
getPassword() : string

# port
getPort() : int
```

See [Entity\Connection](connection.md)

[Back to index](../../README.md)
