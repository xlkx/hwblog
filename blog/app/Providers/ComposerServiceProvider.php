<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

      $word = 'test composer';

      $isAuth = true;

      View::composer(['delete', 'base'], function($view) use ($word) {
        $view->with('wordToPut', $word);
      });

      View::composer('*', function ($view) use ($isAuth) {
          if ($isAuth !== true) {
              $name =  'guest';
          } else {
             $name =  'not guest';
         }

         $view->with('none', $name);
      });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
