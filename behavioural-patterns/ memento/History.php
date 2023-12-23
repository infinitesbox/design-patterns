<?php

require_once './EditorMemento.php';

class History 
{
    private $mementos = [];

    public function save(EditorMemento $memento) 
    {
        $this->mementos[] = $memento;
    }

    public function restore() 
    {
        return array_pop($this->mementos);
    }
}