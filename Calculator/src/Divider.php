<?php
/**
 * Created by PhpStorm.
 * User: Ann Mutwiri
 * Date: 06-Oct-18
 * Time: 8:27 AM
 */

namespace Calculator;


class Divider  implements OperatorInterface
{
    public function run($number, $result)
    {
        return $result / $number;
    }
}