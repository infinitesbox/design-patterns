<?php

require_once './Animal.php';

class Dove extends Animal
{
	public function getMeal()
	{
		return 'Seed';
	}

	public function getClass()
	{
		return 'Aves';
	}
}