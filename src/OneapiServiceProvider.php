<?php

namespace OneAPI\Laravel;

use Illuminate\Support\ServiceProvider;

class OneapiServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/oneapi.php'    =>  config_path('OneAPI.php')
        ], 'config');
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/oneapi.php', 'OneAPI'
        );
    }
}