<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Acme\Chapter1\TipCalculator\TipCalculator;

$tipCalculator = new TipCalculator(10, 15);
$tipCalculator->setBillAmount(12.5);
$tipCalculator->setTipRatePercentages(15);

var_dump($tipCalculator->getTipAmount());
var_dump($tipCalculator->getTotalAmount());
