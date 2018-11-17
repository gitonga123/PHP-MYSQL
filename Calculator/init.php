<?php
//require_once 'src/Calculator.php';
//
//require_once 'src/OperatorInterface.php';
//require_once 'src/Adder.php';
//require_once 'src/Subtractor.php';
//require_once 'src/Multiplier.php';
//require_once 'src/Divider.php';
//use spl auto register

spl_autoload_register(function ($classname) {
    require_once "src/{$classname}.php";
});