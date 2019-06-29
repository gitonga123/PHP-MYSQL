<?php

function minimum_swaps ($ratings) {
	$array_size = sizeof($ratings);
  $times = 0;
  $swap = false;
   for ($i=0; $i < $array_size; $i++) {
        for ($j=0; $j < ($array_size - $i - 1); $j++) {
            if ($ratings[$j] < $ratings[$j+1]) {
                $times += 1;
              $swap = true;
            }
        }
     if ($swap) {
       return $times;
     }
    }

   return $times;
}

echo (minimum_swaps([3,1,2]));