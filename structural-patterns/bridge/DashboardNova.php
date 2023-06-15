<?php

require_once './Dashboard.php';

class DashboardNova extends Dashboard
{
	public function __construct(EditorInterface $editor)
	{
		parent::__construct($editor);
	}

	public function render() : void
	{
		echo '<h1>DashboardNova</h1>';
		$this->editor->render();
	}
}