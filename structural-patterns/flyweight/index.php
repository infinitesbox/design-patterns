<?php

//  php -S localhost:8080 index.php 

require_once './ShapeFactory.php';

$factory = new ShapeFactory();

$circleRed = $factory->getCircle('red');
$circleRed->draw(1, 2);

$circleBlue = $factory->getCircle('blue');
$circleBlue->draw(1, 2);

$circleGreen = $factory->getCircle('green');
$circleGreen->draw(1, 2);

$circleRed2 = $factory->getCircle('red');
$circleRed2->draw(1, 2);