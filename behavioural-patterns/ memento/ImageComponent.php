<?php

class ImageComponent 
{
    private $image;

    public function setImage($image) 
    {
        $this->image = $image;
    }

    public function getImage() 
    {
        return $this->image;
    }
}