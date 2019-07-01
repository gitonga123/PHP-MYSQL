<?php
function stray($arr)
{
    return  array_search(1, array_count_values($arr));
}

echo(stray([17, 17, 3, 17, 17, 17, 17]));
