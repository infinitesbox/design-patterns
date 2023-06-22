<?php

require_once './ShapeInterface.php';

class Circle implements ShapeInterface
{
	private $color;

	public function __construct(string $color) 
	{
		$this->color = $color;
	}

	public function draw(int $x, int $y): void 
	{
		echo "<p>Drawing a circle of color {$this->color} at coordinates ($x, $y).</p>";
	}
}