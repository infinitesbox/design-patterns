<?php

//  php -S localhost:8080 index.php 

require_once './TextComponent.php';
require_once './ImageComponent.php';
require_once './MessageMediator.php';
require_once './User.php';

$mediator = new MessageMediator();

$textComponent = new TextComponent();
$imageComponent = new ImageComponent();

$mediator->setTextComponent($textComponent);
$mediator->setImageComponent($imageComponent);

$user = new User('John Doe', $mediator);

$textComponent->setText('<p>Event: This is a message ...</p>');
$imageComponent->setImage('<h3>http://example.com/image.jpg</h3>');

$user->sendMessage('Hello all!');