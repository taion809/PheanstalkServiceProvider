PheanstalkServiceProvider
==========

Simple service provider for pheanstalk, hope you enjoy.

## Usage
```php
<?php
    use Silex\Application;
    use PheanstalkServiceProvider\PheanstalkServiceProvider;

    $app = new Application();
    $app->register(new PheanstalkServiceProvider(), [
        'pheanstalk.hostname' => 'localhost',
        'pheanstalk.port' => 11300,
        'pheanstalk.timeout' => null,
    ]);

    $app->run();
```

Or if you don't want to use this package at all...
```php
<?php
    use Silex\Application;
    use Pheanstalk\Pheanstalk;

    $app = new Application();
    $app['pheanstalk'] = function() {
        return new Pheanstalk('localhost', 11300, null);
    };

    $app->run();
```

## License
PheanstalkServiceProvider is licensed under the new bsd license, see LICENSE.md.
