<?php
/**
 * Adminlter Service Provider
 */

namespace Alariva\Adminlter;

use Alariva\Adminlter\Bridges\Config\Laravel5Config;
use Collective\Html\HtmlBuilder;
use Illuminate\Support\ServiceProvider;

/**
 * Service provider for Laravel
 *
 * @package Adminlter
 */
class AdminlterServiceProvider extends ServiceProvider
{

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->publishes(
            [
                __DIR__ . '/../config/config.php' => config_path(
                    'adminlter.php'
                )
            ]
        );
        $this->mergeConfigFrom(
            __DIR__ . '/../config/adminlter.php',
            'Adminlter'
        );


        $this->registerSmallbox();
    }

    /**
     * Registers the Smallbox class in the IoC
     */
    private function registerSmallbox()
    {
        $this->app->bind(
            'Adminlter::smallbox',
            function () {
                return new Smallbox();
            }
        );
    }
}
