<?php

   $a = '1234';
   echo "<pre>";
   var_dump($a);
   $a = (int)$a;
   echo "<pre>";
   var_dump($a);
   $a = (bool)$a;
   echo "<pre>";
   var_dump($a);

   $b = 56;
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