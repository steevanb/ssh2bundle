= SSH2 PHP extension installation

Ubuntu :

´´´
    mkdir /etc/php5/conf.d
    apt-get install libssh2-php
    mv /etc/php5/conf.d/ssh2.ini /etc/php5/apache2/conf.d/
    cp /etc/php5/apache2/conf.d/ssh2.ini /etc/php5/cli/conf.d/
    service apache2 restart
´´´