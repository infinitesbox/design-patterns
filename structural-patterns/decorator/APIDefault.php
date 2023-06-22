<?php

require_once './APIInterface.php';

abstract class APIDefault implements APIInterface
{
	protected $api;

	public function __construct(APIInterface $api) 
	{
		$this->api = $api;
	}

	public function request() 
	{
		$this->api->request();
	}
}