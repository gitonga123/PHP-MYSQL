<?php
/**
 * Created by PhpStorm.
 * User: Ann Mutwiri
 * Date: 06-Oct-18
 * Time: 8:26 AM
 */

//namespace Calculator;


class Adder implements OperatorInterface
{
    public function run($number, $result)
    {
        return $result + $number;
    }
}