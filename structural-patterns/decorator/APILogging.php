<?php

require_once './APIDefault.php';

class APILogging extends APIDefault
{
	protected $api;

	public function request() 
	{
		$this->logRequest();
		$this->api->request();
	}

	private function logRequest() 
	{
		echo '<p>Request logging.</p>';
	}
}