<?php

require_once './Shape.php';

class Rectangle implements Shape
{
	private $width;
	private $length;

	function __construct($param)
	{
		$this->width = $param['width'];
		$this->length = $param['length'];
	}
	
	public function getArea()
	{
		return $this->width * $this->length;
	}
}