<?php

require_once './APIDefault.php';

class APIAuthentication extends APIDefault 
{
	public function request() 
	{
		$this->authenticate();
		parent::request();
	}

	private function authenticate() 
	{
		echo '<p>Request authentication.</p>';
	}
}