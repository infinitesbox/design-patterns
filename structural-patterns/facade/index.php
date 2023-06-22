<?php

//  php -S localhost:8080 index.php 

require_once './ThumbnailConverter.php';

$thumbnailConverter = new ThumbnailConverter();
$thumbnailConverter->convert('image.jpg');