<?php

require_once './SubjectInterface.php';

interface ObserverInterface 
{
    public function update(SubjectInterface $subject);
}
