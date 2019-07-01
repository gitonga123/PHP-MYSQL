<?php

function validate_double($digit)
{
    $pattern = '/(\d)+(\.)(\d)+/';

    return preg_match($pattern, $digit);
}

echo validate_double(3.9);
