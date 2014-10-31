# Silex Console Service Provider

This packaget provides a `Symfony\Component\Console` to the Silex base at version 2.0.*

## Install

Put in the `igor822/silex-console-service-provider` in your `composer.json` and register the service:

```php
$app->register(new \Carvinc\Provider\ConsoleServiceProvider(), [
    'console.name' => 'Test',
    'console.version' => '0.0.1'
]);
```

## Usage

Use the console like all commands into Symfony\Console:

```sh
$ ./console command
```

## Add Command

All your Command Classes should extend `Carvinc\Command\Command` to have access of `Silex\Application` by following method

* `getSilexApplication`, which returns the Application