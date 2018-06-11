<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Controller\FizzBuzzController;

class FizzBuzzControllerTest extends WebTestCase
{


    /**
     * @test
     */
    public function itShouldReturnFizzIfDivisibleByThree()
    {
        //Arrange
        $fizzBuzz = new FizzBuzzController();
        $value = 3;
        //Act
        $result = $fizzBuzz->isFizz($value);
        //Assertion
        $this->assertEquals(true,$result);

    }

}
