<?php
function countBits($n)
{
    if (!is_int($n)) {
        throw new InvalidArgumentException("Expected Value of type Integer");
    }
    $binary = decbin($n);
    return substr_count(decbin($n), 1);
}

echo countBits("Daniel");
