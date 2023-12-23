<?php

require_once './User.php';

interface MediatorInterface
{
    public function sendMessage(User $user, $message);
}