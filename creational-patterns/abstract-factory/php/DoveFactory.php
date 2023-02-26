<?php

require_once './AnimalFactoryInterface.php';
require_once './Animal.php';
require_once './Dove.php';

class DoveFactory implements AnimalFactoryInterface
{
	public function create() : Animal
	{
		return new Dove;
	}
}