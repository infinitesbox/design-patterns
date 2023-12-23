<?php

require_once 'SearchInterface.php';

class ArticleSearchContext 
{
    private $searchStrategy;

    public function setSearchStrategy(SearchInterface $searchStrategy) 
    {
        $this->searchStrategy = $searchStrategy;
    }

    public function searchArticles($articles, $keyword) 
    {
        return $this->searchStrategy->search($articles, $keyword);
    }
}
