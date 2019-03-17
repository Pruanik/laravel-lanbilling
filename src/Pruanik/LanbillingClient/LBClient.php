<?php 

namespace Pruanik\LanbillingClient;

use SoapClient;

class LBClient{

	private $soapOptions = [
        'trace' => 1,
        'user_agent' => "PHP-SOAP/php-version",
        'connection_timeout' => 5,
        'exceptions' => 0
    ];
	
    private $client;

	public function __construct($wsdl_path){
		$this->client = new SoapClient($wsdl_path, $this->soapOptions);
	}

}