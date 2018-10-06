<?php
require_once 'init.php';

$c = new Calculator();

$c->setOperation(new Adder());
$c->calculate(10, 50); //60
echo $c->getResult() . "\n";

$c->setOperation(new Subtractor());
$c->calculate(30, 5); //25
echo $c->getResult() . "\n";

$c->setOperation(new Multiplier());
$c->calculate(30, 5); //900
echo $c->getResult() . "\n";

$c->setOperation(new Divider());
$c->calculate(30, 5); //30
echo $c->getResult() . "\n";