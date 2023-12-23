<?php

//  php -S localhost:8080 index.php 

require_once 'TextDataProcessor.php';
require_once 'XmlDataProcessor.php';

$jsonProcessor = new TextDataProcessor();
$jsonProcessor->processData("name: john doe \nemail: johndoe@email.com");

$xmlProcessor = new XmlDataProcessor();
$xmlProcessor->processData('<data><name>john doe</name><email>johndoe@email.com</email></data>');

