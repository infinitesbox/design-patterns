<?php

abstract class DataProcessor 
{
    public final function processData($data) 
    {
        $parsedData = $this->parseData($data);
        $transformedData = $this->transformData($parsedData);
        $result = $this->formatResult($transformedData);
        $this->displayResult($result);
    }

    private function formatResult($data) 
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }

    protected abstract function parseData($data);
    protected abstract function transformData($data);
    protected abstract function displayResult($result);
}
