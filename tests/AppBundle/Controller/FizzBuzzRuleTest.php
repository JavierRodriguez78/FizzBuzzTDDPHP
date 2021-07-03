<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 11/06/18
 * Time: 20:06
 */

namespace Tests\AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Controller\FizzBuzzRule;

class FizzBuzzRuleTest extends WebTestCase
{
    /**
     * @test
     * @dataProvider fizzBuzzNumberProvider
     */
    public function itShouldFizzBuzzIsDivisbleBothThreeAndFive($value, $expected)
    {
        $fizzBuzzRule = new FizzBuzzRule();
        $result = $fizzBuzzRule->match($value);
        $this->assertEquals($expected, $result);
    }

    public function fizzBuzzNumberProvider(){
        return [
            [15, true],
            [30, true],
            [45, true],
            [60, true],
        ];
    }
}