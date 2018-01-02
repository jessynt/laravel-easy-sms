<?php
namespace Jessynt\LaravelEasySMS;

use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Illuminate\Foundation\Application as LaravelApplication;
use Laravel\Lumen\Application as LumenApplication;
use Overtrue\EasySms\EasySms;

/**
 * Class ServiceProvider
 * @package Jessynt\LaravelEasySMS
 */
class ServiceProvider extends LaravelServiceProvider
{
    public function boot()
    {
        $this->setupConfig();
    }

    public function register()
    {
        $this->app->singleton('easysms', function (Container $app) {
            return new EasySms(config('easysms'));
        });

        $this->app->alias('easysms', EasySms::class);
    }

    public function setupConfig()
    {
        $source = realpath(__DIR__ . '/config.php');

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('easysms.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('easysms');
        }

        $this->mergeConfigFrom($source, 'easysms');
    }
}