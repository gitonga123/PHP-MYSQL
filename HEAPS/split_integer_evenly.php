<?php

function split_integer ($num,$parts) {
    if ($num % $parts == 0) {
        for ($i =0; $i < $parts; $i++) {
          $value [] = $num/$parts;
        }
    } else {
      $remainder = $num % $parts;
      $quotient = ($num-$remainder)/$parts;

      for($i = 0; $i < $parts - $remainder; $i++) {
        $value[] = $quotient;
        $num = $num - $value[$i];
      }

      if ($num > 0) {
        $values = split_integer($num, $remainder);
        for ($i=0; $i < count($values); $i++) { 
        		$value[] = $values[$i];
        }
      }
    }

    return $value;
}

print_r(split_integer(20, 6));