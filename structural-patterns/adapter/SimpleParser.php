<?php

require_once './ParserInterface.php';

class SimpleParser implements ParserInterface 
{
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
}