Bundle installation
===================

Composer
--------
```json
# composer.json
{
    "require": {
        "steevanb/ssh2bundle": "2.*"
    }
}
´´´

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
´´´