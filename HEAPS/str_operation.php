<?php
function duplicate_encode($word) {
	$word = strtolower($word);
  $array_word = array_count_values(str_split($word));

  
  $new_string = "";
	for ($i = 0; $i < strlen(strtolower($word)); $i++) {
      if ($array_word[$word[$i]] > 1) {
          $new_string .= ")";
      } else {
      	$new_string .="(";
      }
      
  }
  
  return $new_string;
}

echo duplicate_encode("Success");