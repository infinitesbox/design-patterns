<?php

require_once './APIInterface.php';
require_once './API.php';

class APIHTML implements APIInterface
{
	private $api;

	public function __construct(API $api) 
	{
		$this->api = $api;
	}

	public function fetchData(): string 
	{
		$data = $this->api->fetchData();
		$htmlData = $this->convertJSONtoHTML($data);
		return $htmlData;
	}

	private function convertJSONtoHTML(string $jsonData): string 
	{
		$decodedData = json_decode($jsonData, true);
		$html = '<table>';
		foreach ($decodedData as $key => $value) {
				$html .= "<tr><td>$key</td><td>$value</td></tr>";
		}
		$html .= '</table>';
		return $html;
	}
}