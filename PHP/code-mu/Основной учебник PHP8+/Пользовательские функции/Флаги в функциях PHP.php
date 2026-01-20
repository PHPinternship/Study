<?php
//1
function check($arr): bool
{
    foreach ($arr as $value) {
        if ($value < 0) {
            return false;
        }
    }
    return true;
}
$arr = [1, 2, 3];
var_dump(check($arr));
//2
function digitsAreEven($num): bool
{
    while ($num != 0) {
        if (!is_integer(($num % 10)/2)) {
            return false;
        }
        $num /= 10;
    }
    return true;
}
$num = 228246;
var_dump(digitsAreEven($num));
//3
function checkArray(array $arr): bool
{
    $first = true;
    $lastValue = 0; //suppressing the warning, isn't needed otherwise
    foreach ($arr as $value) {
        if ($first) {
            $lastValue = $value;
            $first = false;
        } else {
            if ($lastValue == $value) {
                return true;
            }
            $lastValue = $value;
        }
    }
    return false;
}
$arr = [1, 2, 3, 3];
var_dump(checkArray($arr));