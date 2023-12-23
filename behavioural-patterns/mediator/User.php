<?php

require_once './MediatorInterface.php';

class User 
{
    private $name;
    private $mediator;

    public function __construct($name, MediatorInterface $mediator) 
    {
        $this->name = $name;
        $this->mediator = $mediator;
    }

    public function sendMessage($message) 
    {
        $this->mediator->sendMessage($this, $message);
    }

    public function getName() 
    {
        return $this->name;
    }
}