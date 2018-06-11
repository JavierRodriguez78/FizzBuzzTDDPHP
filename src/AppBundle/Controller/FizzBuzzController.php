<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FizzBuzzController extends Controller
{
    public function isFizz(int $value):int
    {
        return 0=== $value % 3;
    }

    public function isBuzz(int $value):int
    {
        return 0=== $value % 5;
    }

    public function isFizzBuzz(int $value):int
    {
        return $this->isFizz($value) && $this->isBuzz($value);
    }
}
