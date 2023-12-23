<?php

require_once './Message.php';
require_once './MessageIteratorInterface.php';

class MessageCollection implements MessageIteratorInterface 
{
    private $messages = [];
    private $currentIndex = 0;

    public function addMessage(Message $message) 
    {
        $this->messages[] = $message;
    }

    public function hasNext(): bool 
    {
        return $this->currentIndex < count($this->messages);
    }

    public function next() 
    {
        $message = $this->messages[$this->currentIndex];
        $this->currentIndex++;
        return $message;
    }
}