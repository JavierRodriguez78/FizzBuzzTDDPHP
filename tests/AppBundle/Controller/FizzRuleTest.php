<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 11/06/18
 * Time: 19:52
 */

namespace Tests\AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Controller\FizzRule;

class FizzRuleTest extends WebTestCase
{
    /**
     * @test
     * @dataProvider fizzNumberProvider
     */
    public function itShouldReturnFizzIfDivisibleByThree($value, $expected)
    {

        $fizzRule = new FizzRule();
        $result = $fizzRule->match($value);
        $this->assertEquals($expected, $result);
    }

    public function fizzNumberProvider()
    {
        return [
            [3, true],
            [6, true],
            [9, true],
            [12, true],
            [15, true],
            [18, true],
        ];
    }
}