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


    /**
     * @test
     */
    public function itShouldReturnFizzIfDivisibleByFive()
    {
        //Arrange
        $fizzBuzz = new FizzBuzzController();
        $value = 5;
        //Act
        $result = $fizzBuzz->isBuzz($value);
        //Assertion
        $this->assertEquals(true,$result);

    }

}
