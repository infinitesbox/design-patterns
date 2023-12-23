<?php

require_once './TextComponent.php';
require_once './ImageComponent.php';
require_once './Editor.php';
require_once './History.php';

class Editor 
{
    private $textComponent;
    private $imageComponent;

    public function __construct($textComponent, $imageComponent) 
    {
        $this->textComponent = $textComponent;
        $this->imageComponent = $imageComponent;
    }

    public function createMemento() 
    {
        return new EditorMemento(
            $this->textComponent->getContent(),
            $this->imageComponent->getImage()
        );
    }

    public function restoreFromMemento(EditorMemento $memento) 
    {
        $this->textComponent->setContent($memento->getTextContent());
        $this->imageComponent->setImage($memento->getImage());
    }

    public function showContent() 
    {
        echo '<p>Text: ' . $this->textComponent->getContent() . '</p>';
        echo '<p>Image: ' . $this->imageComponent->getImage() . '</p>';
    }
}