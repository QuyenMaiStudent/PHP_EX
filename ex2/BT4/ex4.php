<?php
$a = "15 cats";
$b = "3.14159abc";
$c = "hello123";
$d = "024";

$sum =$a + $b + $d;
echo "Kết quả cộng: $sum" . PHP_EOL;
var_dump($sum);

//Giải thích:
//Khi cộng chuỗi có số ở đầu, PHP tự động đổi chuỗi thành số
// - $a = "15 cats" => 15
// - $b = "3.14159abc" => 3.14159
// - $d = "024" => 24