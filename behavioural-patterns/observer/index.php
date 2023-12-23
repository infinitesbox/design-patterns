<?php

//  php -S localhost:8080 index.php 

require_once './ObserverInterface.php';
require_once './SubjectInterface.php';
require_once './EmailNotification.php';
require_once './Blog.php';

$blog = new Blog();

$emailObserver1 = new EmailNotification('user1@example.com');
$emailObserver2 = new EmailNotification('user2@example.com');

$blog->addObserver($emailObserver1);
$blog->addObserver($emailObserver2);

$blog->publishNewArticle('Article Title 1');
$blog->publishNewArticle('Article Title 2');
$blog->publishNewArticle('Article Title 3');