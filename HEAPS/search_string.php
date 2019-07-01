<?php

$my_string = "aabbbabbcdeefffh";

// Using inbuilt functions
$string_count = array();
$string_count = array_count_values(str_split($my_string));

$min_value =  min($string_count);
$key = array_search($min_value, $string_count);
print_r($key);
