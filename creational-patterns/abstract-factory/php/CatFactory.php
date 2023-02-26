<?php

require_once './AnimalFactoryInterface.php';
require_once './Animal.php';
require_once './Cat.php';

class CatFactory implements AnimalFactoryInterface
{
	public function create() : Animal
	{
		return new Cat;
	}
}