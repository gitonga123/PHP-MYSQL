<?php
require __DIR__ .'/../Application/Autoload/Loader.php';
Application\Autoload\Loader\Loader::init(__DIR__ . '/..');

// test the autoload
$test = new Application\Test\TestClass();
echo $test->getTest();

$fake = new Application\Test\FakeClass();
echo $fake->getTest();