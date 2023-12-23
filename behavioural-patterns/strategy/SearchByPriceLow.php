<?php

require_once 'SearchInterface.php';

class SearchByPriceLow implements SearchInterface 
{
    public function search($articles, $keyword) 
    {
        $result = array_filter($articles, function($article) use ($keyword) {
            return $article['price'] <= $keyword;
        });
        return $result;
    }
}