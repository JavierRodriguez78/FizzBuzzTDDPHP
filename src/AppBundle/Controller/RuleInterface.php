<?php
/**
 * Created by PhpStorm.
 * User: xavi
 * Date: 11/06/18
 * Time: 19:47
 */

namespace AppBundle\Controller;


interface RuleInterface
{
    public function match (int $value):int;
    public function getReplacement():string ;
}