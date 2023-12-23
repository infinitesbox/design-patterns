<?php

//  php -S localhost:8080 index.php 

require_once './Mail.php';
require_once './SMS.php';
require_once './MessageCollection.php';
require_once './App.php';

$mail1 = new Mail('Hello, this is a mail.');
$mail2 = new Mail('Another mail for you.');
$sms1 = new SMS('Hi, this is an SMS.');
$sms2 = new SMS('Another SMS for you.');

$collection = new MessageCollection();
$collection->addMessage($mail1);
$collection->addMessage($mail2);
$collection->addMessage($sms1);
$collection->addMessage($sms2);

$app = new App($collection);
$app->sendMessages();