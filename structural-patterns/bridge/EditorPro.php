<?php

require_once './EditorInterface.php';

class EditorPro implements EditorInterface
{
	public function render(): void
	{
		echo '<h4>Editor Pro</h4>';
	}
}