<?php
// create a string
$string = 'ABCdefghijklmnopqrstuvwxyz0123456789';

// matching from the start of the string
if (preg_match("/^ABC/i", $string)) {
    echo "The String begins with abc \n";
} else {
    echo "No Match \n";
}

// matching to the end of the string
$string_2 = 'abcdefghijklmnopqrstuvwxyz0123456789';

if (preg_match("/89\z/i", $string_2)) {
    echo "The String ends with 89 \n";
} else {
    echo "No Match\n";
}

// searching meta characters

$my_string = '1+1=2';

if (preg_match("/^1\+1/i", $my_string)) {
    echo "THe string begins with 1+1 \n";
} else {
    echo "No match found \n";
}

// search for a match
$string = 'abcefghijklmnopqrstuvwxyz0123456789';
echo preg_match_all("/[^0-9]/", $string, $matches);
echo "\n";
foreach ($matches[0] as $key => $value) {
    echo $value;
    echo "\n";
}
echo "\n";
