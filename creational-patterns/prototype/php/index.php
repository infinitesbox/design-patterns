<?php

//  php -S localhost:8080 index.php

require_once './Task.php';

$task_original = new Task(
	'Create new calendar', 
	'We need calendar to plan for our app'
);
$task_original->setDone(true);
$task_original->setNote('I try but there are some bugs, you can create new tasks, or give to someone else to create new one');

$task_clone = clone $task_original;

$task_original->info();
$task_clone->info();