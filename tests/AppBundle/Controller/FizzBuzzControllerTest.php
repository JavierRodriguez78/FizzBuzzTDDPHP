<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FizzBuzzControllerTest extends WebTestCase
{


    /**
     * @test
     */
    public function itShouldReturnFizzIfDivisibleByThree()
    {
        //Arrange
        $fizzBuzz = new FizzBuzz();
        $value = 3;
        //Act
        $result = $fizzBuzz->isFizz($value);
        //Assertion
        $this->assertEquals(true,$result);

    }

}
