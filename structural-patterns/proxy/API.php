<?php

require_once './APIInterface.php';

class API implements APIInterface
{
	public function fetchData(): string 
	{
		$data = [
			'id' => 1,
			'name' => 'John Doe',
			'email' => 'johndoe@example.com'
		];

		return json_encode($data);
	}
}