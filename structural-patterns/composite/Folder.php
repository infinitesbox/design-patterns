<?php

require_once './ComponentInterface.php';

class Folder implements ComponentInterface 
{
	private $name;
	private $components;

	public function __construct($name) 
	{
		$this->name = $name;
		$this->components = [];
	}

	public function printName()
	{
		echo "<h4>Folder: " . $this->name . "\n</h4>";
		foreach ($this->components as $component)
			$component->printName();
	}

	public function addComponent($component)
	{
		$this->components[] = $component;
	}
}