<?php 
function describeType($var) {
    if (is_null($var)){
        return "Kiểu: null | Giá trị: null" . PHP_EOL;
    } elseif (is_bool($var)) {
        return "Kiểu: boolean | Giá trị:" . ($var ? "true" : "false") . PHP_EOL;
    } elseif (is_int($var)) {
        return "Kiểu: interger | Giá trị: $var" . PHP_EOL;
    } elseif (is_float($var)) {
        return "Kiểu: float | Giá trị: $var" . PHP_EOL;
    } elseif (is_string($var)) {
        return "Kiểu: string | Giá trị: \"$var\"" . PHP_EOL;
    } elseif (is_array($var)) {
        return print_r($var, true) . PHP_EOL;
    } else {
        return "Kiểu không xác định" . PHP_EOL;
    }
}

echo describeType(null);
echo describeType(true);
echo describeType(123);
echo describeType(3.14);
echo describeType("Hello");
echo describeType([1, 2, 3]);