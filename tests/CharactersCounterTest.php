<?php
/**
 * Created by PhpStorm.
 * User: ymihaylov
 * Date: 10.02.18
 * Time: 11:53
 */

use Acme\Chapter2\CharactersCounter;

class CharactersCounterTest extends \PHPUnit\Framework\TestCase
{

    public function testGetString()
    {
        $counter = new CharactersCounter();
        $value = 'Test String';
        $counter->setString($value);

        $this->assertEquals($counter->getString(), $value);
    }

    public function testGetStringLenght()
    {
        $counter = new CharactersCounter();
        $value = 'Test String';
        $counter->setString($value);

        $this->assertEquals($counter->getStringLenght(), mb_strlen($value));
    }
}
