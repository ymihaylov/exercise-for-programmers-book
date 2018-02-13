<?php

declare(strict_types=1);

require 'vendor/autoload.php';

$quote = '';
while ($quote === '') {
    $quote = readline('What is the quote? ');
}

$author = '';
while ($author === '') {
    $author = readline('Who said it? ');
}

$quoteObj = new \Acme\Chapter2\Quote($author, $quote);
echo $quoteObj->getFormattedQuote();
echo "\n";

//echo "";
