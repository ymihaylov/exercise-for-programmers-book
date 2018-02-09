<?php
/**
 * Created by PhpStorm.
 * User: ymihaylov
 * Date: 9.02.18
 * Time: 18:31
 */

use Acme\Chapter1\TipCalculator\TipCalculator;

class TipCalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function testSetNegativeBillAmount()
    {
        $this->expectException(InvalidArgumentException::class);
        $tipCalculator = new TipCalculator(10, 15);
        $tipCalculator->setBillAmount(-12.5);
    }

    public function testSetInvalidTipRatePercentages()
    {
        $this->expectException(InvalidArgumentException::class);

        $tipCalculator = new TipCalculator(10, 15);
        $tipCalculator->setTipRatePercentages(255);
        $tipCalculator->setTipRatePercentages(-25);
    }
    
    public function testGetTipAmount()
    {
        $tipCalculator = new TipCalculator(10, 15);
        $this->assertEquals($tipCalculator->getTipAmount(), 1.5);

        $tipCalculator->setTipRatePercentages(30);
        $this->assertEquals($tipCalculator->getTipAmount(), 3);

        $tipCalculator->setBillAmount(11.25);
        $tipCalculator->setTipRatePercentages(15);
        $this->assertEquals($tipCalculator->getTipAmount(), 1.69);

        $tipCalculator->setBillAmount(125.25);
        $tipCalculator->setTipRatePercentages(25.5);
        $this->assertEquals($tipCalculator->getTipAmount(), 31.94);
    }

    public function testGetTotalAmount()
    {
        $tipCalculator = new TipCalculator(10, 15);
        $this->assertEquals($tipCalculator->getTotalAmount(), 11.5);

        $tipCalculator->setTipRatePercentages(30);
        $this->assertEquals($tipCalculator->getTotalAmount(), 13);

        $tipCalculator->setBillAmount(11.25);
        $tipCalculator->setTipRatePercentages(15);
        $this->assertEquals($tipCalculator->getTotalAmount(), 12.94);

        $tipCalculator->setBillAmount(125.25);
        $tipCalculator->setTipRatePercentages(25.5);
        $this->assertEquals($tipCalculator->getTotalAmount(), 157.19);
    }
}
