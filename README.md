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
        'pheanstalk.hostname' => 'localhost',s
        'pheanstalk.port' => 11300,
        'pheanstalk.timeout' => null,
    ]);

    $app->run();
```

## License
PheanstalkServiceProvider is licensed under the new bsd license, see LICENSE.md.
