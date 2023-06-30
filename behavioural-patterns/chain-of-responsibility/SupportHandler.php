<?php

require_once './Request.php';

abstract class SupportHandler 
{
	protected $nextHandler;

	public function setNext(SupportHandler $handler) 
	{
		$this->nextHandler = $handler;
	}

	public function handleRequest(Request $request) 
	{
		if ($this->canHandleRequest($request)) 
		{
			$this->processRequest($request);
		} 
		elseif ($this->nextHandler != null) 
		{
			$this->nextHandler->handleRequest($request);
		}
		else 
		{
			echo "<p>No support level was able to handle the request.</p>";
		}
	}

	protected abstract function canHandleRequest(Request $request);
	
	protected abstract function processRequest(Request $request);
}