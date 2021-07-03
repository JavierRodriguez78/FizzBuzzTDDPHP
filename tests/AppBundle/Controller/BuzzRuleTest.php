<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 11/06/18
 * Time: 19:52
 */

namespace Tests\AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Controller\BuzzRule;

class BuzzRuleTest extends WebTestCase
{
    /**
     * @test
     * @dataProvider buzzNumberProvider
     */
    public function itShouldReturnFizzIfDivisibleByFive($value, $expected)
    {

        $buzzRule = new BuzzRule();
        $result = $buzzRule->match($value);
        $this->assertEquals($expected, $result);
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
}