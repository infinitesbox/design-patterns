<?php

class Request 
{
	private $level;
	private $description;

	public function __construct($level, $description) 
	{
		$this->level = $level;
		$this->description = $description;
	}

	public function getLevel() 
	{
		return $this->level;
	}

	public function getDescription() 
	{
		return $this->description;
	}
}