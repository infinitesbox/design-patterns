<?php

require_once './ParserEditorInterface.php';

class EditorParser implements ParserEditorInterface 
{
	public function parseSimpleHTML($data): string
	{	
		// some code to parse in HTML
		// ...
		return 'Data Simple HTML';
	}

	public function parseProHTML($data): string
	{
		// some code to parse in HTML with extra options (video tag, ...)
		// ...
		return 'Data Pro HTML';
	}
}