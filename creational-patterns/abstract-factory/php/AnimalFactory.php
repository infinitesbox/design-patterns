<?php

require_once './Animal.php';

class AnimalFactory
{
	public static function create($factoryClassName) : Animal
	{
		return $factoryClassName->create();
	}
}