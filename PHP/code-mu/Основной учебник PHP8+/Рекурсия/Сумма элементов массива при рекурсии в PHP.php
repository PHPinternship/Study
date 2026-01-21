<?php
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
function func($arr) {
    global $sum;
    $sum += array_shift($arr);

    if (count($arr) !== 0) {
        func($arr);
    }
    return $sum;
}
echo func($arr);