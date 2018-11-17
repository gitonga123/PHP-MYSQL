<?php
/**
 * Created by PhpStorm.
 * User: Dan Mutwiri
 * Date: 17-Nov-18
 * Time: 4:40 PM
 */
spl_autoload_register(function ($class_name){
    include $class_name. ".php";
});

$obj = new MyClass1();
$obj2 = new MyClass2();


