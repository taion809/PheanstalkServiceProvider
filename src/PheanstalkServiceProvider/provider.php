<?php
namespace PheanstalkServiceProvider;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Pheanstalk\Pheanstalk;

class PheanstalkServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['pheanstalk'] = $app->share(function () use ($app) {
            $host = $app['pheanstalk.hostname'] ? $app['pheanstalk.hostname'] : 'localhost';
            $port = $app['pheanstalk.port'] ? $app['pheanstalk.port'] : PheanstalkInterface::DEFAULT;
            $timeout = $app['pheanstalk.timeout'] ? $app['pheanstalk.timeout'] : null;

            return new Pheanstalk($host, $port, $timeout);
        });
    }

    public function boot(Application $app)
    {
    }
}
