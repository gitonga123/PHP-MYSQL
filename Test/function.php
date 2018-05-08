<?php
/**function is a reusable block of code that, given an input, performs some actions and optionally, returns some result**/

/** Overloaded functions => refers to the ability of declaring two or more functions with the same name but different arguments**/
declare(strict_types = 1);

function addNumbers(int $a, int $b, bool $print_sum = false) : int{
	$sum = $a + $b;
	if ($print_sum) {
		echo "The Sum is " . $sum;
	}

	return $sum;
}
 function getJsonData(){
 	$books = file_get_contents( __DIR__ .'/books.json');
 	$print_books = json_decode($books,true);

 	echo "<pre>";
 	print_r($print_books);
 	echo "</pre>";
 }

getJsonData();