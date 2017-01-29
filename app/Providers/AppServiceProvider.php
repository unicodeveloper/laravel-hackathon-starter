<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
		//
    	// environment specific application initialization
    	//
    	switch( $this->app->environment() )
    	{
			// development env
			case 'local':
				if( $this->app->runningInConsole() )
				{
					// Some dev tools to generate some code completion helpers (some fake php files)
					$this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
				}
				// A 'in browser' debug bar
				$this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
				break;
			// testing env
			case '':
				break;
			// production env
			case '':
				break;
		}

    }
}
