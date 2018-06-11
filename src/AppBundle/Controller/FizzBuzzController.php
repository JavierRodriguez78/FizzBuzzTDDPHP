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
}
