<?php

require_once './ComponentInterface.php';

class File implements ComponentInterface 
{
	private $name;

	public function __construct($name) 
	{
		$this->name = $name;
	}

	public function printName()
	{
		echo "<p>File: " . $this->name . "\n</p>";
	}
}