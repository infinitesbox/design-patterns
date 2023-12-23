<?php

//  php -S localhost:8080 index.php 

require_once 'ArticleSearchContext.php';
require_once 'SearchByPriceLow.php';
require_once 'SearchByPriceHigh.php';
require_once 'SearchByTitle.php';

$articles = [
    ['name' => 'T-SHIRT', 'price' => 10.00],
    ['name' => 'JEANS', 'price' => 30.00],
    ['name' => 'SNEAKERS', 'price' => 50.00],
];

function displayResults($title, $result) 
{
    echo "<h2>$title</h2>";
    echo '<pre>';
    print_r($result);
    echo '</pre>';
    echo '<hr>';
}

$searchContext = new ArticleSearchContext();

$searchContext->setSearchStrategy(new SearchByPriceLow());
$result = $searchContext->searchArticles($articles, 20.00);
displayResults('Search by low price', $result);

$searchContext->setSearchStrategy(new SearchByPriceHigh());
$result = $searchContext->searchArticles($articles, 20.00);
displayResults('Search by high price', $result);

$searchContext->setSearchStrategy(new SearchByTitle());
$result = $searchContext->searchArticles($articles, 'T-SHIRT');
displayResults('Search by title', $result);
