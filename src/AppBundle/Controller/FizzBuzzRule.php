<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 11/06/18
 * Time: 20:04
 */

namespace AppBundle\Controller;


class FizzBuzzRule implements RuleInterface
{
    const FIZZFACTOR=3;
    const BUZZFACTOR=5;

    public function match(int $value): int
    {
        if(
            0===$value % self::FIZZFACTOR
            &&
            0===$value % self::BUZZFACTOR
        ){
            return true;
        }

        return false;
    }

    public function getReplacement(): string
    {
        return 'FizzBuzz';
    }
}