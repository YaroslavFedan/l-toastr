<?php

namespace Dongrim\Toastr;

use Dongrim\Toastr\Toastr;
use Illuminate\Support\ServiceProvider;

class ToastrServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('toastr.php'),
        ], 'config');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Toastr::class, function ($app) {
            return new Toastr($app['session'], $app['config']);
        });

        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'toastr');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Toastr::class];
    }
}
