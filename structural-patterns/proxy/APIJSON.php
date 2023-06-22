<?php

require_once './APIInterface.php';
require_once './API.php';

class APIJSON implements APIInterface
{
	private $api;

	public function __construct(API $api) 
	{
		$this->api = $api;
	}

	public function fetchData(): string 
	{
		$data = $this->api->fetchData();
		return $data;
	}
}