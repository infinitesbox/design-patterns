<?php

require_once 'DataProcessor.php';

class XmlDataProcessor extends DataProcessor 
{
    protected function parseData($data) 
    {
        $xml = simplexml_load_string($data);
        $json = json_encode($xml);
        return json_decode($json, true);
    }

    protected function transformData($data) 
    {
        return $data;
    }

    protected function displayResult($result) 
    {
        echo '<h3>From XML</h3><div>' . $result . '</div>';
    }
}
