<?php
/**
 * Created by PhpStorm.
 * User: ymihaylov
 * Date: 9.02.18
 * Time: 21:18
 */

declare(strict_types=1);

require 'vendor/autoload.php';

use Acme\Chapter2\Greeting;

if (!isset($argv[1])) {
    echo "You should pass argument as name!\n";
    return false;
}

$name = $argv[1];
$greeting = new Greeting($name);
echo $greeting->sayHello();
