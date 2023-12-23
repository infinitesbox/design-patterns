<?php

require_once 'DataProcessor.php';

class TextDataProcessor extends DataProcessor 
{
    protected function parseData($data) 
    {
       $lines = explode("\n", $data);
       $parsedData = [];
       foreach ($lines as $line) {
           $parts = explode(':', $line, 2);
           if (count($parts) === 2) 
           {
               $key = trim($parts[0]);
               $value = trim($parts[1]);
               $parsedData[$key] = $value;
           }
       }
       return $parsedData;
    }

    protected function transformData($data) 
    {
        return $data;
    }

    protected function displayResult($result) 
    {
        echo '<h3>From Text</h3><div>' . $result  . '</div>';
    }
}
