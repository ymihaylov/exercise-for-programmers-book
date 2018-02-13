<?php
/**
 * Created by PhpStorm.
 * User: ymihaylov
 * Date: 13.02.18
 * Time: 20:09
 */

use Acme\Chapter2\Quote;

class QuoteTest extends \PHPUnit\Framework\TestCase
{

    public function testGetFormattedQuote()
    {
        $author = 'Obi-Wan Kenobi';
        $quote = 'These aren\'t the droids';

        $quoteObj = new Quote($author, $quote);
        $expected = sprintf(Quote::QUOTE_FORMATTED_TEMPLATE, $author, $quote);
        $this->assertEquals($expected, $quoteObj->getFormattedQuote());
    }
}
