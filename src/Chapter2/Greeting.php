<?php
/**
 * Created by PhpStorm.
 * User: ymihaylov
 * Date: 9.02.18
 * Time: 21:14
 */

declare(strict_types=1);

namespace Acme\Chapter2;


class Greeting
{
    private $name;

    private $greetings = [
        "Hello, %s, nice to meet you!\n",
        "Maraba, %s! What's going on?\n",
        "Que pasa, %s! What's up?\n",
    ];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello()
    {
        $index = rand(0, count($this->greetings) - 1);
        return sprintf($this->greetings[$index], $this->name);
    }
}