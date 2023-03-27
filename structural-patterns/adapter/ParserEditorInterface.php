<?php

interface ParserEditorInterface
{
	public function parseSimpleHTML($data): string;
	public function parseProHTML($data): string;
}