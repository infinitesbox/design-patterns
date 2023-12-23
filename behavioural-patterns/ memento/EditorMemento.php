<?php

class EditorMemento 
{
    private $textContent;
    private $image;

    public function __construct($textContent, $image) 
    {
        $this->textContent = $textContent;
        $this->image = $image;
    }

    public function getTextContent() 
    {
        return $this->textContent;
    }

    public function getImage() 
    {
        return $this->image;
    }
}