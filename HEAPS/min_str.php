<?php 
function findShort($str){
   $new_str = explode(' ', $str);
   $min_word = min(array_map("strlen", $new_str));
   
   return $min_word;
}

print_r(findShort("Daniel Mutwi"));