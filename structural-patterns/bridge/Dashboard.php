<?php

require_once './EditorInterface.php';

abstract class Dashboard
{
	protected EditorInterface $editor;

	public function __construct(EditorInterface $editor)
	{
		$this->editor = $editor;
	}

	abstract public function render() : void;
}