<?php

require_once './Command.php';

class ExtractCommand implements Command 
{
	private $file;

	public function __construct($file) 
	{
		$this->file = $file;
	}

	public function execute() 
	{
		// Logic for extracting the .tar file
		echo "<p>File '{$this->file}' extracted successfully.</p>";
	}
}