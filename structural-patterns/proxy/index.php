<?php

//  php -S localhost:8080 index.php 

require_once './API.php';
require_once './APIJSON.php';
require_once './APIHTML.php';

// Exemple d'utilisation
$api = new API();

$apiJSON = new APIJSON($api);
$jsonData = $apiJSON->fetchData();
echo "<h3>JSON Data</h3>";
echo "<p>" . $jsonData . "</p>";

$apiHTML = new APIHTML($api);
$htmlData = $apiHTML->fetchData();
echo "<h3>HTML Data</h3>";
echo $htmlData;