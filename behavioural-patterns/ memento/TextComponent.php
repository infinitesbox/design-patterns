<?php

class TextComponent 
{
    private $content;

    public function setContent($content) 
    {
        $this->content = $content;
    }

    public function getContent() 
    {
        return $this->content;
    }
}