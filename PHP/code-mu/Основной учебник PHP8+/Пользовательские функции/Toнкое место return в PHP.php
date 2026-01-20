<?php
//1
function func($num) {
    return $num;

    $res = $num * $num;
    return $res;
}

echo func(3);
//2
function func2($num): float|int
{
    if ($num <= 0) {
        return abs($num);
    } else {
        return $num * $num;
    }
}

echo func2(10);
echo func2(-5);
//3
function func3($num): float|int
{
    if ($num <= 0) {
        return abs($num);
    }

    return $num * $num;
}

echo func3(10);
echo func3(-5);