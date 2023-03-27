<?php

//  php -S localhost:8080 index.php 

require_once './SimpleParser.php';
require_once './EditorParser.php';
require_once './FreeParser.php';

$data = [
	'name' => 'Flower Viwer',
	'version' => 'v1.0',
	'description' => 'Some description ...',
	'image' => [
		'title' => 'Heaven Flowers',
		'url' => 'https//path.com/api/image-1.png',
	],
];

$simpleParser = new SimpleParser;
echo "<h3>Simple Parser</h3>";
echo "<p>JSON: {$simpleParser->parseJson($data)} </p>";
echo "<p>XML: {$simpleParser->parseXML($data)} </p>";

$editorParser = new EditorParser;
echo "<h3>Editor Parser</h3>";
echo "<p>Simple HTML: {$editorParser->parseSimpleHTML($data)} </p>";
echo "<p>Pro HTML: {$editorParser->parseProHTML($data)} </p>";

$freeParser = new FreeParser(new EditorParser);
echo "<h3>Free Parser</h3>";
echo "<p>JSON: {$freeParser->parseJson($data)} </p>";
echo "<p>XML: {$freeParser->parseXML($data)} </p>";
echo "<p>Simple HTML: {$freeParser->parseSimpleHTML($data)} </p>";