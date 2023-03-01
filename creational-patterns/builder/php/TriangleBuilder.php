<?php

require_once './ShapeBuilder.php';
require_once './Shape.php';

class TriangleBuilder implements ShapeBuilder
{	
	private $triangle;

	public function __construct()
	{
		$this->triangle = new Shape;
	}

	public function build()
	{
		$this->triangle->setName('Triangle');
		$this->triangle->setVertices(3);
		$this->triangle->setEdges(3);
		$this->triangle->setFaces(1);
	}

	public function getShape() : Shape
	{
		return $this->triangle;
	}
}