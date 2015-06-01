<?php

namespace steevanb\SSH2Bundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class SSH2Bundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     * @throws \Exception
     */
    public function build(ContainerBuilder $container)
    {
        if (function_exists('ssh2_connect') === false) {
            throw new \Exception('libssh2-php is not installed, and is required by SSH2Bundle. See ' . realpath(__DIR__ . DIRECTORY_SEPARATOR . 'README.md') . '.');
        }
    }
}
