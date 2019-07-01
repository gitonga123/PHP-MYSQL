<?php

$testing_string = 'hellos world';

echo preg_match('/hello/', $testing_string);
echo preg_match('/world/', $testing_string);
echo preg_match('/^hello/', $testing_string);
echo preg_match('/^Hello/i', $testing_string);
echo preg_match('/^[A-Za-z0-9]{5}/', $testing_string);
echo preg_match('/^\w{5}/', $testing_string);
