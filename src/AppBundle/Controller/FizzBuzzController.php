<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FizzBuzzController extends Controller
{
    const FIZZ_FACTOR =3;
    const BUZZ_FACTOR = 5;

    public function isFizz(int $value):int
    {
        return 0=== $value % self::FIZZ_FACTOR;
    }

    public function isBuzz(int $value):int
    {
        return 0=== $value % self::BUZZ_FACTOR;
    }

    public function isFizzBuzz(int $value):int
    {
        return $this->isFizz($value) && $this->isBuzz($value);
    }
}
