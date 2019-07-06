<?php

function findMissing($list)
{
    return ($list[0] + end($list)) * ((count($list) + 1) / 2) - array_sum($list);
}
echo(findMissing([1, 3, 5, 9, 11])) . "\n";
echo(findMissing([1, 2, 3, 5])). "\n";
echo(findMissing([100, 200, 300, 500])). "\n";
