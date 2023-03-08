<?php

//  php -S localhost:8080 index.php

require_once './Canvas.php';

$canvas_1 = Canvas::getInstance();
$canvas_1->draw();

$canvas_2 = Canvas::getInstance();
$canvas_2->draw();

if ($canvas_1 === $canvas_2)
	echo '<h4>$canvas_1 and $canvas_2 are two references to the same instance!</h4>';