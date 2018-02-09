<?php

declare(strict_types=1);

namespace Acme\Chapter1\TipCalculator;

class TipCalculator
{
    private $billAmount;
    private $tipRatePercentages;

    public function __construct(float $billAmount, float $tipRatePercents)
    {
        $this->setBillAmount($billAmount);
        $this->setTipRatePercentages($tipRatePercents);
    }

    /**
     * @param int $billAmount
     * @return TipCalculator
     */
    public function setBillAmount(float $billAmount): TipCalculator
    {
        if ($billAmount <= 0) {
            throw new \InvalidArgumentException('Invalid bill amount value: '.$billAmount);
        }

        $this->billAmount = $billAmount;
        return $this;
    }

    /**
     * @param int $tipRate
     * @return TipCalculator
     */
    public function setTipRatePercentages(float $tipRatePercentages): TipCalculator
    {
        if ($tipRatePercentages < 0 or $tipRatePercentages > 100) {
            throw new \InvalidArgumentException('Invalid tip rate percentages '.$tipRatePercentages);
        }

        $this->tipRatePercentages = $tipRatePercentages;
        return $this;
    }

    public function getTipAmount(): float
    {
        return round($this->billAmount * ($this->tipRatePercentages / 100), 2);
    }

    public function getTotalAmount(): float
    {
        return $this->billAmount + $this->getTipAmount();
    }
}
