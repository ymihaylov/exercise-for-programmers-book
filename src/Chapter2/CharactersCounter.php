<?php
/**
 * Created by PhpStorm.
 * User: ymihaylov
 * Date: 10.02.18
 * Time: 11:44
 */

declare(strict_types=1);

namespace Acme\Chapter2;

class CharactersCounter
{
    private $string;

    /**
     * @return string
     */
    public function getString(): string
    {
        return $this->string;
    }

    /**
     * @param string $string
     */
    public function setString(string $string): void
    {
        $this->string = $string;
    }

    public function getStringLenght()
    {
        return mb_strlen($this->string);
    }
}