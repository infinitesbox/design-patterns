<?php

class TextComponent 
{
    private $text;

    public function setText($text) 
    {
        $this->text = $text;
    }

    public function getText() 
    {
        return $this->text;
    }
}