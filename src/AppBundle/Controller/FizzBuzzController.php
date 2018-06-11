<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FizzBuzzController extends Controller
{
    const FIZZ_FACTOR =3;
    const BUZZ_FACTOR = 5;

    public static function isFizz(int $value):int
    {
        return 0=== $value % self::FIZZ_FACTOR;
    }

    public static function isBuzz(int $value):int
    {
        return 0=== $value % self::BUZZ_FACTOR;
    }

    public static function isFizzBuzz(int $value):int
    {
        return self::isFizz($value) && self::isBuzz($value);
    }

    public static function getReplacement(int $value):string
    {
        if(self::isFizzBuzz($value)){
            return 'FizzBuzz';
        }
        if(self::isFizz($value)){
            return 'Fizz';
        }
        if(self::isBuzz($value)){
            return 'Buzz';
        }
        return $value;
    }
}
