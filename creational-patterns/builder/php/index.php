<?php

//  php -S localhost:8080 index.php 

require_once './TriangleBuilder.php';
require_once './RectangleBuilder.php';
require_once './Canvas.php';

$triangleBuilder = new TriangleBuilder;
$rectangleBuilder = new RectangleBuilder;

$canvas = new Canvas;

$canvas->setBuilder($triangleBuilder);
$canvas->draw();

$canvas->setBuilder($rectangleBuilder);
$canvas->draw();