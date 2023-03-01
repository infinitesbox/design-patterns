<?php

require_once './ShapeBuilder.php';
require_once './Shape.php';

class RectangleBuilder implements ShapeBuilder
{	
	private $rectangle;

	public function __construct()
	{
		$this->rectangle = new Shape;
	}

	public function build()
	{
		$this->rectangle->setName('Rectangle');
		$this->rectangle->setVertices(4);
		$this->rectangle->setEdges(4);
		$this->rectangle->setFaces(1);
	}

	public function getShape() : Shape
	{
		return $this->rectangle;
	}
}