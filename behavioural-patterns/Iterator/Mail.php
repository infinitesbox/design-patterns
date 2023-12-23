<?php

require_once './Message.php';

class Mail extends Message 
{
    public function send() 
    {
        echo '<p>Sending mail: ' . $this->getContent() . '</p>';
    }
}