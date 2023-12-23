<?php

require_once './MessageCollection.php';

class App 
{
    private $messageCollection;

    public function __construct(MessageCollection $messageCollection) 
    {
        $this->messageCollection = $messageCollection;
    }

    public function sendMessages() 
    {
        $iterator = $this->messageCollection;

        while ($iterator->hasNext()) 
        {
            $message = $iterator->next();
            $message->send();
        }
    }
}