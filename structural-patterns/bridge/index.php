<?php

//  php -S localhost:8080 index.php 

require_once './Dashboard.php';
require_once './DashboardLight.php';
require_once './DashboardNova.php';
require_once './EditorFree.php';
require_once './EditorPro.php';

$dashboard_1 = new DashboardLight(new EditorFree);
$dashboard_1->render();

$dashboard_2 = new DashboardLight(new EditorPro);
$dashboard_2->render();

$dashboard_3 = new DashboardNova(new EditorFree);
$dashboard_3->render();

$dashboard_4 = new DashboardNova(new EditorPro);
$dashboard_4->render();
