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


//require 'Collection.php';
//require 'TalkInterface.php';
//require 'Cat.php';
//require 'Dog.php';

//
//$pigeon = new Pigeon(true, 2);
//
//if ($pigeon->isCanFly()) {
//    echo "can fly";
//}
//$c = new Collection();
//$cat = new Dog();
//$dog = new Cat();
//
//
//$c->animals = "cow";
//
////echo "<pre>"; print_r($c->all(), true);
//echo $c->getItems('animals');
//echo $c->foo('baar','baars','baarz','baarzo','baarizo','barizok');
//echo $c;
////$c->add('foo');
//$c->add('bar');

//echo count($c);
//echo json_encode($c);

//echo "Cat => " .$cat->talk() . "<br />" . "Dog => " . $dog->talk();


// Dependency Injection
//require 'Lock.php';
//require 'Chest.php';

// $pigeon = new Pigeon(true, 2);

// if ($pigeon->isCanFly()) {
//     echo "can fly";
// }

//$chest = new Chest(new Lock);
//
//$chest->close();

require 'Bar.php';
//require 'Foo.php';
//
$bar = new Bar();

echo $bar->bar()->baz();
