<?php

$greetings = "Hello'w World ";
echo "\n";
// this functions returns the length of a string
echo strlen($greetings);

// this function counts the number of words in a string

echo str_word_count($greetings);

// reverse a string

echo strrev($greetings);

// searching for a specific text within a String

echo strpos("Hello World!", "World");

// Replace text within a string

echo str_replace("World", "Dolly", "Hello World!");

$str = addcslashes($greetings, "d");

echo $str;

echo addslashes($greetings);

// chop function removes whitespaces or other predefined characters form the right end of a string
echo chop($greetings);
