<?php

require_once './APIInterface.php';

class API implements APIInterface
{
	public function request()
	{
		echo '<p>Call API.</p>';
	}
}