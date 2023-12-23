<?php

require_once './MediatorInterface.php';
require_once './TextComponent.php';
require_once './ImageComponent.php';
require_once './User.php';

class MessageMediator implements MediatorInterface 
{
    private $textComponent;
    private $imageComponent;

    public function setTextComponent(TextComponent $textComponent) 
    {
        $this->textComponent = $textComponent;
    }

    public function setImageComponent(ImageComponent $imageComponent) 
    {
        $this->imageComponent = $imageComponent;
    }

    public function sendMessage(User $user, $message) 
    {
        $text = $this->textComponent->getText();
        $image = $this->imageComponent->getImage();
        $completeMessage = "<div><h1>". $user->getName()
            . " say:</h1><p>$message</p> $text $image"
            . "</div>";
        echo $completeMessage;
    }
}