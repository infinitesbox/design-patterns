<?php

require_once './ObserverInterface.php';
require_once './SubjectInterface.php';

class Blog implements SubjectInterface 
{
    private $newArticle;
    private $observers = array();

    public function addObserver(ObserverInterface $observer) 
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(ObserverInterface $observer) 
    {
        $index = array_search($observer, $this->observers);
        if ($index !== false) 
        {
            unset($this->observers[$index]);
        }
    }

    public function notifyObservers() 
    {
        foreach ($this->observers as $observer) 
        {
            $observer->update($this);
        }
    }

    public function publishNewArticle($title) 
    {
        $this->newArticle = $title;
        $this->notifyObservers();
    }

    public function getNewArticle() 
    {
        return $this->newArticle;
    }
}
