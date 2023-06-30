<?php

require_once './Command.php';

class UploadCommand implements Command 
{
	private $file;

	public function __construct($file) 
	{
		$this->file = $file;
	}

	public function execute() 
	{
		// Logic for uploading the .tar file
		echo "<p>File '{$this->file}' uploaded successfully.</p>";
	}
}