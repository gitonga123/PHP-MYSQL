<?php

$array_to_sort = [21, 25, 100, 98, 89, 77];

function quickSort($data)
{
    $times = 0;
    if (count($data) == 0) {
        return $data;
    }
    $pivot = $data[0];

    $left = $right = [];

    for ($i = 1; $i < count($data); $i++) {
        if ($data[$i] > $pivot) {
            $left [] = $data[$i];
            $times += 1;
        } else {
            $times += 1;
            $right[] = $data[$i];
        }
    }
    return array_merge(quickSort($left), array($pivot), quickSort($right));
}
print_r(quickSort($array_to_sort));
