<?php

require_once 'StateInterface.php';
require_once 'Editor.php';

class Block2 implements StateInterface
{
    private $editor;

    public function setEditor(Editor $editor)
    {
        $this->editor = $editor;
    }

    public function handleStateChange($value)
    {
        $this->editor->setState($value);
        $this->editor->render();
    }

    public function render()
    {
        $title = $this->editor->getState();
        echo "<div>Block 2: {$title}</div>";
    }
}