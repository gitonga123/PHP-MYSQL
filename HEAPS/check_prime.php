<?php

function is_prime(int $n): bool
{
    return is_numeric(sqrt($n));
    if ($n <= 1) {
        return false;
    } else {
        for ($i = 2; $i < 9; $i++) {
            if ($i < $n && $n % $i === 0 && s_int(sqrt($n)) == true) {
                return false;
            }
        }
        return true;
    }
}

var_dump(is_prime(11282881));
// 11282881
