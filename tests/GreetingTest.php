<?php
/**
 * Created by PhpStorm.
 * User: ymihaylov
 * Date: 9.02.18
 * Time: 21:28
 */

use Acme\Chapter2\Greeting;

class GreetingTest extends \PHPUnit\Framework\TestCase
{
    public function testSayHello()
    {
        $name = 'Brian';
        $greeting = new Greeting($name);
        $reflection = new ReflectionClass($greeting);

        $property = $reflection->getProperty('greetings');
        $property->setAccessible(true);
        $greetings = $property->getValue($greeting);

        $greetings = array_map(function ($greeting) use ($name) {
            return sprintf($greeting, $name);
        }, $greetings);

        $this->assertContains($greeting->sayHello(), $greetings);
    }
}
