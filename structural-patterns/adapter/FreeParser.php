<?php

require_once './ParserInterface.php';
require_once './EditorParser.php';

class FreeParser implements ParserInterface 
{
	private $adapter;

	public function __construct(EditorParser $adapter) 
	{
		$this->adapter = $adapter;
	}

	public function parseJson($data): string
	{	
		// some code to parse in JSON
		// ...
		return 'Data JSON';
	}

	public function parseXML($data): string
	{
		// some code to parse in XML
		// ...
		return 'Data XML';
	}

	public function parseSimpleHTML($data): string
	{
		return $this->adapter->parseSimpleHTML($data);
	}
}