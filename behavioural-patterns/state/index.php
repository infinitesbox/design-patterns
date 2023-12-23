<?php

//  php -S localhost:8080 index.php 

require_once 'Editor.php';
require_once 'Block1.php';
require_once 'Block2.php';

$block1 = new Block1();
$block2 = new Block2();
$editor = new Editor($block1, $block2);


$block1->handleStateChange('Title 1');

$block2->handleStateChange('Title 2');
