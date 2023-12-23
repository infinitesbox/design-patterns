<?php

//  php -S localhost:8080 index.php 

require_once 'MasterCard.php';
require_once 'VisaCard.php';
require_once 'JSONSaverVisitor.php';

$masterCard = new MasterCard(5000);
$visaCard = new VisaCard(3000);

$jsonSaverVisitor = new JSONSaverVisitor();

$masterCard->accept($jsonSaverVisitor);
$visaCard->accept($jsonSaverVisitor);

$jsonData = $jsonSaverVisitor->getJSONData();
echo $jsonData;