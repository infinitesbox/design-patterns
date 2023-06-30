<?php

//  php -S localhost:8080 index.php 

require_once './CommandManager.php';
require_once './UploadCommand.php';
require_once './ExtractCommand.php';

$commandManager = new CommandManager();

$uploadCommand = new UploadCommand("archive.tar");
$extractCommand = new ExtractCommand("archive.tar");

$commandManager->addCommand($uploadCommand);
$commandManager->addCommand($extractCommand);

$commandManager->executeCommands();