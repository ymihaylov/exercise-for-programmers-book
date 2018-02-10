<?php
/**
 * Created by PhpStorm.
 * User: ymihaylov
 * Date: 10.02.18
 * Time: 11:45
 */

declare(strict_types=1);

require 'vendor/autoload.php';

use Acme\Chapter2\CharactersCounter;

if (!isset($argv[1])) {
    echo "You should pass string for first argument!\n";
    return false;
}

$string = $argv[1];
$counter = new CharactersCounter;
$counter->setString($string);
echo "{$counter->getString()} has {$counter->getStringLenght()} characters.\n";
