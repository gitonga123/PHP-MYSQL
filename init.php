<?php
///**
// * Index FIle
// */
//
//use Bookstore\Domain\Book;
//use Bookstore\Domain\Customer;
//
//
//function __autoloader($classname)
//{
//    $lastSlash = strpos($classname, '\\') + 1;
//    $classname = substr($classname, $lastSlash);
//    $directory = str_replace('\\','/', $classname);
//    $filename = __DIR__.'/src/Domain/'.$directory. '.php';
//
//    require_once($filename);
//}
////spl_autoload_register('autoloader');
//$book1 = new Book("1984", "George Orwell", 9785267006323, 12);
//$customer1 = new Customer(3, 'John', 'Doe', 'johndoe@mail.com');
//
//
//$customer1->setFirstname("James");
//
//var_dump($customer1::getLastId());
//var_dump(Customer::getLastId());
//require 'Person.php';
//$object = new stdClass();
//
//$object->name = 'John';
//
//echo $object->name;

//$person1 = new Person("James Warungu", 35);
//
//$person1->sentence();

require 'Collection.php';
//
//$pigeon = new Pigeon(true, 2);
//
//if ($pigeon->isCanFly()) {
//    echo "can fly";
//}
$c = new Collection();

$c->add('foo');
$c->add('bar');

echo count($c);
echo json_encode($c);