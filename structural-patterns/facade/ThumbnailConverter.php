<?php

require_once './ImageResizer.php';
require_once './ImagePNGGenerator.php';

class ThumbnailConverter 
{
	private $resizer;
	private $imagePNGGenerator;

	public function __construct() 
	{
		$this->resizer = new ImageResizer();
		$this->imagePNGGenerator = new ImagePNGGenerator();
	}

	public function convert($imageFile) 
	{
		$this->resizer->resize($imageFile, 800, 600);
		$this->imagePNGGenerator->generate($imageFile, 200);
	}
}