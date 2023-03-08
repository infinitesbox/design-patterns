<?php

class Canvas
{
	private static $_INSTANCE_ = null;

	private function __construct() {}

	public static function getInstance()
	{
		if (is_null(self::$_INSTANCE_))
		{
			echo '<h4>Create for the first the first time!</h4>';
			self::$_INSTANCE_ = new Canvas();
		}
		return self::$_INSTANCE_;	
	}

	public function draw()
	{
		echo '<p>Draw...</p>';
	}
}