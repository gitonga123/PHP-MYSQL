<?php
function expanded_form(int $n): string {
	 $n_array = str_split($n);
	 
	 $num_count = count($n_array);
	 $new_string = [];
	 foreach ($n_array as $digit) {
	 	  
      $new_string[] = $digit . str_repeat(0, $num_count - 1);
      $num_count--;
	 }

	 return implode("+", $new_string);
}

echo expanded_form(12);