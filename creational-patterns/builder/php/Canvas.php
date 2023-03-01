<?php

class Canvas
{
	private $builder;

	public function setBuilder($builder)
	{
		$this->builder = $builder;
		$this->builder->build();
	}

	public function draw()
	{
		$shape = $this->builder->getShape();
		$info = $shape->getInfo();
		echo "<h1>vertices: {$info['name']}</h1>";
		echo "<p>vertices: {$info['vertices']}</p>";
		echo "<p>edges: {$info['edges']}</p>";
		echo "<p>faces: {$info['faces']}</p>";
	}
}