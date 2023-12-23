<?php

require_once './Message.php';

class SMS extends Message 
{
    public function send() 
    {
        echo '<p>Sending SMS: ' . $this->getContent() . '</p>';
    }
}
