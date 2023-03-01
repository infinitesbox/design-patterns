<?php

class Shape
{
	private $name;
	private $vertices;
	private $edges;
	private $faces;

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setVertices($vertices)
	{	
		$this->vertices = $vertices;
	}
	
	public function setEdges($edges)
	{	
		$this->edges = $edges;
	}	
	
	public function setFaces($faces)
	{
		$this->faces = $faces;
	}

	public function getInfo()
	{
		return [
			'name' => $this->name,
			'vertices' => $this->vertices,
			'edges' => $this->edges,
			'faces' => $this->faces,
		];
	}
}