<?php

require_once './ObserverInterface.php';

interface SubjectInterface 
{
    public function addObserver(ObserverInterface $observer);
    public function removeObserver(ObserverInterface $observer);
    public function notifyObservers();
}
