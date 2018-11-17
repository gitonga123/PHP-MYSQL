<?php
/**
 * Created by PhpStorm.
 * User: Dann Mutwiri
 * Date: 17-Nov-18
 * Time: 4:49 PM
 */
spl_autoload_register(function ($name) {
    echo "Want to load $name.\n";
    throw new Exception("Unable to load $name");
});

try {
    $obj = new MyClass2();
    $obj1 = new MyClass1();
    $obj2 = new NonLoadableClass();
} catch (Exception $e) {
    echo $e->getMessage();
}