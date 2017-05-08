<?php
namespace PheanstalkServiceProvider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Pheanstalk\Pheanstalk;
use Pheanstalk\PheanstalkInterface;

class PheanstalkServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['pheanstalk'] = function () use ($app) {
            $host = $app['pheanstalk.hostname'] ? $app['pheanstalk.hostname'] : 'localhost';
            $port = $app['pheanstalk.port'] ? $app['pheanstalk.port'] : PheanstalkInterface::DEFAULT_PORT;
            $timeout = $app['pheanstalk.timeout'] ? $app['pheanstalk.timeout'] : null;

            return new Pheanstalk($host, $port, $timeout);
        };
    }

    public function boot(Application $app)
    {
    }
}
