2.0.0 (2015-06-01)
------------------

- [SensioLabsInsight platinum medal](https://insight.sensiolabs.com/projects/9a2a6100-fc21-4534-8909-737469d0a590)
- Documentation
- Rename kujaff/* namespace to steevanb/*
- Move kujaff\SSH2Bundle\SSH2\Connection to steevanb\SSH2Bundle\Entity\Connection
- Move kujaff\SSH2Bundle\SSH2\Profile to steevanb\SSH2Bundle\Entity\Profile
- Move kujaff\SSH2Bundle\SSH2\Exception to steevanb\SSH2Bundle\Entity\Exception
- Move kujaff\SSH2Bundle\SSH2\Service to steevanb\SSH2Bundle\Service\Connection
- Assert libssh2-php is installed
- Add $address, $login, $password and $port parameters to Profile::__construct()
- Add ConnectionException
- Connection::assertConnected() visibility upped to public
- Fix some bugs when Connection::getProfile() is null

1.0.0 (2014-06-11)
------------------

- Creating bundle
