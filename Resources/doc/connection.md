Entity\Connection
-----------------

```php
# constructor
__construct(Profile $profile, $autoConnect = true)

# do the connection, save the state into $state (getState to get it), and return bool
connect() : bool
# do the connection, save the state into $state(getState to get it), and throws a ConnectionException if not it fails
assertConnect()

# test the connection, and throws a ConnectionException if connection is not established
assertConnected()

# execute a command, and return it's output as string
exec($command) : string
# execute a command, and return it's output as array (one output line by array element)
execLines($command) : array
# execute a command, and return a line of it's output (first by default)
execLine($command, $index = 0, $default = null) : string

# accessors
getProfile() : Profile
getState() : int
```

See [Entity\Profile](profile.md)

[Back to index](../../README.md)
