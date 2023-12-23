<?php

require_once 'SearchInterface.php';

class SearchByTitle implements SearchInterface 
{
    public function search($articles, $keyword) {
        $result = array_filter($articles, function($article) use ($keyword) {
            return stripos($article['name'], $keyword) !== false;
        });
        return $result;
    }
}