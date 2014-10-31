<?php 
namespace Carvinc\Console;

use Silex\Application as SilexApplication;
use Symfony\Component\Console\Application as ConsoleApplication;

class Application extends ConsoleApplication {

    private $app;

    public function __construct($name, $version, $application) {
        parent::__construct($name, $version);
        $this->app = $application;

        $application->boot();
    }

    public function getApplication() {
        return $this->app;
    }

}