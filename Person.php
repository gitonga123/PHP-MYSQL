<?php
/**
 * Created by PhpStorm.
 * User: Ann Mutwiri
 * Date: 04-Oct-18
 * Time: 8:12 AM
 */

class Person
{
   public $name;
   public $age;

   public function __construct(string $name, string $age)
   {
       $this->age = $age;
       $this->name = $name;
   }

   public function sentence()
   {
       echo "$this->name is $this->age years old";
   }

}