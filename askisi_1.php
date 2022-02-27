<?php

$input = "1,2,3,4,5,6,7,8";

$input = str_replace(',', '', $input);
$int_array = str_split($input);
$sum = array_sum($int_array);

echo $sum . "\n";
