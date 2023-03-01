<?php

require_once './Shape.php';

interface ShapeBuilder
{
	public function build();
	public function getShape() : Shape;
}