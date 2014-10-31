<?php 
namespace Carvinc\Provider;

use Pimple\ServiceProviderInterface;
use Pimple\Container;
use Carvinc\Console\ConsoleEvent;
use Carvinc\Console\Application as ConsoleApplication;

class ConsoleServiceProvider implements ServiceProviderInterface {

    public function register(Container $app) {
        $app['console'] = function($app) {
            $application = new ConsoleApplication($app['console.name'], $app['console.version'], $app);
            return $application;
        };
    }

}