<?php

$my_string = "aabbbabbcdeefffh";

// O(n2)
$count = 0;
for ($i=0; $i < strlen($my_string); $i++) {
    for ($j=0; $j < strlen($my_string); $j++) {
        if ($my_string[$i] == $my_string[$j]) {
            $count += 1;
        }
    }
    if ($count < 2) {
        echo $my_string[$i];
    }

    $count = 0;
}

echo "\n";

// O(n)
$string_array = array();
for ($i=0; $i < strlen($my_string); $i++) {
    $string_array[$my_string[$i]] += 1;
}

foreach ($string_array as $key => $value) {
    if ($value == 1) {
        echo $key;
    }
}

echo "\n";

// Using inbuilt functions
$string_count = array();
$string_count = array_count_values(str_split($my_string));

echo min($string_count);
// print_r($string_count);
