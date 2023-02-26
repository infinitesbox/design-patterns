<?php

//  php -S localhost:8080 index.php 

require_once './ShapeFactory.php';
require_once './Rectangle.php';
require_once './Square.php';

echo '<h4>Test</h4>';

$rectangle = ShapeFactory::create(Rectangle::class, [ 'width' => 10, 'length' => 12 ]);

echo "<p>rectangle => area = {$rectangle->getArea()}</p>";

$square = ShapeFactory::create(Square::class, [ 'side' => 10]);

echo "<p>square => area = {$square->getArea()}</p>";