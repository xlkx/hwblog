<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    protected $namespaceClient = 'App\Http\Controllers\Client';
	protected $namespaceAdmin = 'App\Http\Controllers\Admin';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
		
		$this->mapAdminRoutes();
		
		$this->mapClientRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
		Route::middleware('web')
			->prefix('test')
			->namespace($this->namespace)
			->group(base_path('routes/web.php'));
		}

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
	
	protected function mapAdminRoutes () {
		Route::middleware('web')
			->prefix('/admin')
			->namespace($this->namespaceAdmin)
			->group(base_path('routes/admin.php'));
	}
	
	protected function mapClientRoutes() {
		Route::middleware('web')
			->namespace($this->namespaceClient)
			->group(base_path('routes/client.php'));
	}
					
}
