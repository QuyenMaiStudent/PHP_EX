<?php
$arr = [1, 2, 3, 4, 5];

echo $arr[0] . PHP_EOL;

echo $arr[count($arr) - 1] . PHP_EOL;

$sum = array_sum($arr);
echo "Tổng các phần tử:" . $sum;
