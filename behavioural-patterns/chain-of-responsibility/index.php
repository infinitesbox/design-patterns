<?php

//  php -S localhost:8080 index.php 

require_once './Level1SupportHandler.php';
require_once './Level2SupportHandler.php';
require_once './Level3SupportHandler.php';
require_once './Request.php';

$level1Handler = new Level1SupportHandler();
$level2Handler = new Level2SupportHandler();
$level3Handler = new Level3SupportHandler();

$level1Handler->setNext($level2Handler);
$level2Handler->setNext($level3Handler);

$request1 = new Request(2, "Problem with the printer");
$request2 = new Request(4, "Problem with the OS");

$level1Handler->handleRequest($request1);
$level1Handler->handleRequest($request2);