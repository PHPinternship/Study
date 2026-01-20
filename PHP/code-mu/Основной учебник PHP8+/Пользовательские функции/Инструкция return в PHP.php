<?php
//1
function cubeOf($num): int
{
    return $num ** 3;
}
$res = cubeOf(3);
echo $res;
echo "<br>";
//2
function sumOfCubes($num1, $num2): int
{
    return $num1 ** 3 + $num2 ** 3;
}
$res = sumOfCubes(2, 3);
echo $res;