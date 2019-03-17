<?php

namespace Pruanik\LanbillingClient;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

/**
 * Service Provider For Lanbilling Connection
 */
class ServiceProvider extends LaravelServiceProvider
{
	public function boot() {

  	}

	public function register(){
		$this->app->singleton('LanbillingClient', function($app) {
            return new LBClient(config('soap.defaults.wsdl'));
        });
	}

}