<?php

$n = 1000;
$first = 0;
$second = 1;

echo $first."\n";
echo $second."\n";
for($i=0;$i<=$n;$i++)
{
    $z = $first + $second;
    echo $z."\n";
    $first=$second;
    $second=$z;
}