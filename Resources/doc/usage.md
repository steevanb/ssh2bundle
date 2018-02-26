Connection
----------

```php
use steevanb\SSH2Bundle\Entity\Profile;
use steevanb\SSH2Bundle\Entity\Connection;

# create connection profile
$profile = new Profile([
    'address' => 'some ip or valid url',
    'login' => 'root',
    'id-rsa-pub' => '/var/www/.ssh/id_rsa.pub',
    'id-rsa-pem' => '/var/www/.ssh/id_rsa_pem'
]);
# create connection, and connect
$connection = new Connection($profile);
# or use ssh2 service
$connection = $container->get('ssh2')->connect(
    'address' => $address,
    'login' => $login,
    'password' => $password
);

# exec command, and return it's output as string
$connection->exec('ls -la');

# exec command, and return it's output as array (one output line by array element)
$connection->execLines('ls -la');

# exec command, and return one line of it's output (first by default)
$connection->execLine('ls -la');
```

See [Entity\Profile](profile.md)

See [Entity\Connection](connection.md)

[Back to index](../../README.md)
