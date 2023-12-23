<?php

require_once './ObserverInterface.php';
require_once './SubjectInterface.php';

class EmailNotification implements ObserverInterface 
{
    private $email;

    public function __construct($email) 
    {
        $this->email = $email;
    }

    public function update(SubjectInterface $subject) 
    {
        if ($subject instanceof Blog) 
        {
            $newArticle = $subject->getNewArticle();
            $this->sendEmail($newArticle);
        }
    }

    private function sendEmail($articleTitle) 
    {
        echo "<p>Email sent to {$this->email}: New article published - {$articleTitle}</p>";
    }
}
