<?php

//  php -S localhost:8080 index.php 

require_once './Folder.php';
require_once './File.php';

$root = new Folder("Root");
$root->addComponent(new File("file_1.txt"));
$root->addComponent(new File("file_2.txt"));

$folder1 = new Folder("Folder_1");
$folder1->addComponent(new File("file_3.txt"));
$folder1->addComponent(new File("file_4.txt"));

$folder2 = new Folder("Folder_2");
$folder2->addComponent(new File("file_5.txt"));
$folder2->addComponent(new File("file_6.txt"));

$root->addComponent($folder1);
$root->addComponent($folder2);

$root->printName();