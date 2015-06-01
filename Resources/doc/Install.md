Composer
--------

```
composer require steevanb/ssh2bundle 2.0.*
```

Or add it manually :

```json
# composer.json
{
    "require": {
        "steevanb/ssh2bundle": "2.0.*"
    }
}
```

Add bundle to your AppKernel
----------------------------
```php
# app/AppKernel.php
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new steevanb\SSH2Bundle\SSH2Bundle(),
        );
    }
}
```

[Back to index](../../README.md)
