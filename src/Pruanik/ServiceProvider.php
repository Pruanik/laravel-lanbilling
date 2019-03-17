<?php

namespace Pruanik\LanbillingClient;

use Illuminate\Support\ServiceProvider;
use App\Services\Lanbilling\LBClient;

/**
 * Service Provider For Lanbilling Connection
 */
class LBClientServiceProvider extends ServiceProvider
{

	public function register(){
		$this->app->singleton('LBClient', function($app) {
            return new LBClient(config('soap.defaults.wsdl'));
        });
	}

}