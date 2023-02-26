<?php

require_once './Shape.php';

class ShapeFactory
{
	public static function create($className, $param) : Shape
	{
		return new $className($param);
	}
}