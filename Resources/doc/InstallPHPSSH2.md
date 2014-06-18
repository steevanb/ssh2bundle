SSH2 PHP extension installation
===============================

Linux / Ubuntu
--------------
´´´
    mkdir /etc/php5/conf.d
    apt-get install libssh2-php
    # only if XX-ssh2.ini doesn't exists in /etc/php5/apache2/conf.d/
    cp /etc/php5/conf.d/ssh2.ini /etc/php5/apache2/conf.d/
    # only if XX-ssh2.ini doesn't exists in /etc/php5/cli/conf.d/
    cp /etc/php5/conf.d/ssh2.ini /etc/php5/cli/conf.d/
    service apache2 restart
´´´