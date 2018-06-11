<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Controller\FizzBuzzController;

class FizzBuzzControllerTest extends WebTestCase
{


    /**
     * @test
     * @dataProvider fizzNumbersProvider
     */
    public function itShouldReturnFizzIfDivisibleByThree($value, $expected)
    {
        //Arrange
        $fizzBuzz = new FizzBuzzController();
        $value = 3;
        //Act
        $result = $fizzBuzz->isFizz($value);
        //Assertion
        $this->assertEquals($expected,$result);

    }

    public function fizzNumbersProvider()
    {
        return[
            [3, true],
            [6, true],
            [9, true],
            [12, true],
            [15, true],
            [18, true],
        ];
    }


    /**
     * @test
     * @dataProvider buzzNumberProvider
     */
    public function itShouldReturnFizzIfDivisibleByFive($value,$expected)
    {
        //Arrange
        $fizzBuzz = new FizzBuzzController();
        $value = 5;
        //Act
        $result = $fizzBuzz->isBuzz($value);
        //Assertion
        $this->assertEquals($expected,$result);

    }

    public function buzzNumberProvider()
    {
        return [
            [5, true],
            [10, true],
            [15, true],
            [20, true],
            [25, true],
            [30, true],
        ];
    }

    /**
     * @test
     * @dataProvider buzzNumberProvider
     */
    public function itShouldReturnFizzBuzzIfDivisibleBothThreeAndFive($value,$expected)
    {
        //Arrange
        $fizzBuzz = new FizzBuzzController();
         //Act
        $result = $fizzBuzz->isFizzBuzz($value);
        //Assertion
        $this->assertEquals($expected,$result);

    }

    public function FizzBuzzNumberProvider()
    {
        return [
            [15, true],
            [30, true],
            [45, true],
            [60, true],
        ];
    }


}
