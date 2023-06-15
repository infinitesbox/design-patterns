<?php

require_once './EditorInterface.php';

class EditorFree implements EditorInterface
{
	public function render(): void
	{
		echo '<h4>Editor Free</h4>';
	}
}