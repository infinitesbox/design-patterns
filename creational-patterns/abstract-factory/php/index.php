<?php

//  php -S localhost:8080 index.php 

require_once './AnimalFactory.php';
require_once './DoveFactory.php';
require_once './CatFactory.php';

echo '<h4>Creational Patterns - Abstract Factory</h4>';

$dove = AnimalFactory::create(new DoveFactory);

echo "<p>dove => {$dove->getMeal()}</p>";
echo "<p>dove => {$dove->getClass()}</p>";

$cat = AnimalFactory::create(new CatFactory);

echo "<p>cat => {$cat->getMeal()}</p>";
echo "<p>cat => {$cat->getClass()}</p>";