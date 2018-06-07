<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Includes\Generator;
use App\Includes\Helpers;

class GeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Helpers', function($app) {
          return new Helpers();
        });

        $this->app->bind('MyGenerator', function($app) {
          return new Generator($app->make('Helpers'));
        });
    }
}
