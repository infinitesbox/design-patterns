<?php

require_once './Shape.php';

class Square implements Shape
{
	private $side;

	function __construct($param)
	{
		$this->side = $param['side'];
	}

	public function getArea()
	{
		return $this->side * $this->side;
	}
}