<?php

require 'Bird.php';

class Pigeon extends Bird
{
    public function foo()
    {
        echo $this->canFly;
    }
}