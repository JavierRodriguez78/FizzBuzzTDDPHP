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

        $result = FizzBuzzController::isFizz($value);
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

        $result = FizzBuzzController::isBuzz($value);
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
     * @dataProvider FizzBuzzNumberProvider
     */
    public function itShouldReturnFizzBuzzIfDivisibleBothThreeAndFive($value,$expected)
    {
        $result = FizzBuzzController::isFizzBuzz($value);
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

    /**
     * @test
     * @dataProvider listValuesProvider
     */
    public function itShouldGenerateTheCorrectReplacementForEachNumber($value, $expected)
    {
        $this->assertEquals($expected, FizzBuzzController::getReplacement($value));
    }

    public function listValuesProvider()
    {
        return [
            [1,1],
            [2,2],
            [3,'Fizz'],
            [4,4],
            [5,'Buzz'],
            [15,'FizzBuzz'],
        ];
    }
}
