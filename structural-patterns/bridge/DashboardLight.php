<?php

require_once './Dashboard.php';

class DashboardLight extends Dashboard
{
	public function __construct(EditorInterface $editor)
	{
		parent::__construct($editor);
	}

	public function render() : void
	{
		echo '<h1>DashboardLight</h1>';
		$this->editor->render();
	}
}