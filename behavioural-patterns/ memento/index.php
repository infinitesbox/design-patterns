<?php

//  php -S localhost:8080 index.php 

require_once './TextComponent.php';
require_once './ImageComponent.php';
require_once './Editor.php';
require_once './History.php';

$textComponent = new TextComponent();
$imageComponent = new ImageComponent();

$editor = new Editor($textComponent, $imageComponent);
$history = new History();

$textComponent->setContent('Version 1 - Text');
$imageComponent->setImage('http://example.com/image1.jpg');
$history->save($editor->createMemento());

$textComponent->setContent('Version 2 - Text');
$imageComponent->setImage('http://example.com/image2.jpg');
$history->save($editor->createMemento());

$version2 = $history->restore();
$editor->restoreFromMemento($version2);

$editor->showContent();

$version1 = $history->restore();
$editor->restoreFromMemento($version1);

$editor->showContent();

$textComponent->setContent('Version 3 - Text');
$imageComponent->setImage('http://example.com/image3.jpg');
$history->save($editor->createMemento());

$editor->showContent();