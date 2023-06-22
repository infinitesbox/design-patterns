<?php

//  php -S localhost:8080 index.php 

require_once './API.php';
require_once './APILogging.php';
require_once './APIAuthentication.php';

$api = new API();

$apiLogging = new APILogging($api);
$apiAuthentication = new APIAuthentication($apiLogging);

$apiAuthentication->request();