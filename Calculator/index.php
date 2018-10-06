<?php
require_once 'src/Calculator.php';

require_once 'src/OperatorInterface.php';
require_once 'src/Adder.php';
require_once 'src/Subtractor.php';
require_once 'src/Multiplier.php';
require_once 'src/Divider.php';

$c = new \Calculator\Calculator();

$c->setOperation(new \Calculator\Adder());
$c->calculate(10, 50); //60
echo $c->getResult() . "\n";

$c->setOperation(new \Calculator\Subtractor());
$c->calculate(30); //30
echo $c->getResult() . "\n";

$c->setOperation(new \Calculator\Multiplier());
$c->calculate(30); //900
echo $c->getResult() . "\n";

$c->setOperation(new \Calculator\Divider());
$c->calculate(30); //30
echo $c->getResult() . "\n";