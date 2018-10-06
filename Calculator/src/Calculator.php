<?php
/**
 * Created by PhpStorm.
 * User: Ann Mutwiri
 * Date: 06-Oct-18
 * Time: 8:27 AM
 */

namespace Calculator;


class Calculator
{
    protected $result;
    protected $operation;

    /**
     * @param mixed $operation
     */
    public function setOperation(OperatorInterface $operation): void
    {
        $this->operation = $operation;
    }

    public function calculate()
    {
        foreach (func_get_args() as $func_get_arg) {
            $this->result = $this->operation->run($func_get_arg, $this->result);
        }
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }
}