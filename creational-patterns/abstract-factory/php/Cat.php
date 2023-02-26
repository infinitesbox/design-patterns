<?php

require_once './Animal.php';

class Cat extends Animal
{
	public function getMeal()
	{
		return 'fish';
	}

	public function getClass()
	{
		return 'Mammalia';
	}
}