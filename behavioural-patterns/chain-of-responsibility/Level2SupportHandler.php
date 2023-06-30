<?php

require_once './SupportHandler.php';
require_once './Request.php';

class Level2SupportHandler extends SupportHandler 
{
	protected function canHandleRequest(Request $request) 
	{
		return $request->getLevel() <= 2;
	}

	protected function processRequest(Request $request) 
	{
		echo "<p>Level {$request->getLevel()} support has handled the request: {$request->getDescription()}</p>";
	}
}