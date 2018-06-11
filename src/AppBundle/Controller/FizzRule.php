<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 11/06/18
 * Time: 19:49
 */

namespace AppBundle\Controller;


class FizzRule implements RuleInterface
{

    const FACTOR = 3;

    public function match(int $value):int
    {
       return 0 === $value % self::FACTOR;
    }

    public function getReplacement(): string
    {
        return 'Fizz';
    }
}