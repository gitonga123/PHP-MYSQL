<?php
//type casting explicitly
   $a = '1234';
   echo "<pre>";
   var_dump($a);
   $a = (int)$a;
   echo "<pre>";
   var_dump($a);
   $a = (bool)$a;
   echo "<pre>";
   var_dump($a);
//type casting using functions
   $b = 5;
echo "<pre>";
   var_dump(intval($b));
echo "<pre>";
   var_dump(floatval($b));
echo "<pre>";
   var_dump(strval($b));
echo "<pre>";
   var_dump(boolval($b));
echo "<pre>";
   var_dump($b);
echo "<pre>";
   var_dump(intdiv(5,3));
echo "<pre>";
   var_dump(settype($a, 'string'));
echo "<pre>";
   var_dump($a);
   //magic constants
echo "<pre>";
var_dump(__LINE__);
echo "<pre>";
var_dump(__FILE__);
echo "<pre>";
var_dump(__CLASS__);
echo "<pre>";
var_dump(__METHOD__);
echo "<pre>";
var_dump(__FUNCTION__);
echo "<pre>";
var_dump(__TRAIT__);
echo "<pre>";
var_dump(__NAMESPACE__);

//prefix, postfix
$b = 1;
echo "<pre>";
var_dump($b++);
echo "<pre>";
var_dump(++$b);
echo "<pre>";
var_dump($b--);
echo "<pre>";
var_dump(--$b);

//space shift operator
var_dump(1 <=> 2); //output -1
var_dump(1 <=> 1); //output 0
var_dump(1 <=> 0); //output 1