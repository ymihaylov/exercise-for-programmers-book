<?php
/**
 * Created by PhpStorm.
 * User: ymihaylov
 * Date: 13.02.18
 * Time: 19:57
 */

namespace Acme\Chapter2;


class Quote
{
    const QUOTE_FORMATTED_TEMPLATE = '%s says, "%s"';

    private $author;
    private $quote;

    public function __construct($author, $quote)
    {
        $this->author = $author;
        $this->quote = $quote;
    }

    public function getFormattedQuote()
    {
        return sprintf(self::QUOTE_FORMATTED_TEMPLATE, $this->author, $this->quote);
    }
}