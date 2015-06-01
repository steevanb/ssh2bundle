Connection
----------

```php
use steevanb\SSH2Bundle\Entity\Profile;
use steevanb\SSH2Bundle\Entity\Connection;

# create connection profile
$profile = new Profile('host', 'login', 'password');
# create connection, and connect
$connection = new Connection($profile);

# exec command, and return it's output as string
$connection->exec('ls -la');

# exec command, and return it's output as array (one output line by array element)
$connection->execLines('ls -la');

# exec command, and return one line of it's output (first by default)
$connection->execLine('ls -la');
```

See [Profile](profile.md)

See [Connection](connection.md)

[Back to index](../README.md)
