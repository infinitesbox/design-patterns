<?php

require_once './ShapeInterface.php';
require_once './Circle.php';

class ShapeFactory 
{
	private $flyweights = [];

	public function getCircle(string $color): ShapeInterface 
	{
		if (!isset($this->flyweights[$color])) 
		{
			$this->flyweights[$color] = new Circle($color);
		}
		return $this->flyweights[$color];
	}
}