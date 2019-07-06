<?php
function orderedCount($text) {
  $ordered_count_array = [];
  $text_count_array = array_count_values(str_split($text));
  foreach($text_count_array as $key => $value) {
    $ordered_count_array[] = array($key, $value);
  }
  return $ordered_count_array;
}

print_r(orderedCount("danieldaniel"));
