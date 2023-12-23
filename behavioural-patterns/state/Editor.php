<?php

require_once 'Block1.php';
require_once 'Block2.php';

class Editor
{
    private $state;
    private $block1;
    private $block2;

    public function __construct(Block1 $block1, Block2 $block2)
    {
        $this->state = 'default';
        $this->block1 = $block1;
        $this->block1->setEditor($this);
        $this->block2 = $block2;
        $this->block2->setEditor($this);
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function render()
    {
        echo '<h3>Page</h3>';
        $this->block1->render();
        $this->block2->render();
    }
}
