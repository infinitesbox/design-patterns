<?php

interface ParserInterface
{
	public function parseJson($data): string;
	public function parseXML($data): string;
}