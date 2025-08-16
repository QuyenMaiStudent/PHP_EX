<?php

//Khởi tạo mảng $number chứa 5 số bất kỳ
$number = [12, 99, 56, 34, 9];

// Tính tổng các phần tử trong mảng
$sum = array_sum($number);

//Tìm giá trị lớn nhất
$max = max($number);

//Tìm giá trị nhỏ nhất
$min = min($number);

//In kết quả
echo "Tổng các phần tử:" . $sum . PHP_EOL;
echo "Giá trị lớn nhất:" . $max . PHP_EOL;
echo "Giá trị nhỏ nhất:" . $min . PHP_EOL;