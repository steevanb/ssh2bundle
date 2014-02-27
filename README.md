ssh2bundle
==========

Bundle to use SSH2 PHP extension with Symfony2

SSH2 PHP extension installation
===============================

Ubuntu :

    mkdir /etc/php5/conf.d
    apt-get install libssh2-php
    mv /etc/php5/conf.d/ssh2.ini /etc/php5/apache2/conf.d/
    service apache2 restart

Bundle installation
===================

Composer :

    # composer.json
    {
        "require": {
            "kujaff/ssh2bundle": "dev-master"
        }
    }

Add bundle to your AppKernel :

    # app/AppKernel.php
    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                // -----
                new kujaff\SSH2Bundle\SSH2Bundle(),
            );
        }
    }
