<?php
//1
function reversePrime($num): array {
    for ($i = 1, $arr = []; $i <= $num; $i++) {
        if (is_integer($num / $i)) {
            $arr[] = $i;
        }
    }
    return $arr;
}
var_dump(reversePrime(2026));
//2
function reversePrimeDouble($num1, $num2): array {
    $arr1 = reversePrime($num1);
    $arr2 = reversePrime($num2);
    return array_intersect($arr1, $arr2);
}

var_dump(reversePrimeDouble(102, 68));
//3
function digitSum($num): int
{
    $sum = 0;
    while ($num != 0) {
        $sum += $num % 10;
        $num /= 10;
    }
    return $sum;
}
echo digitSum(12345699);
echo "<br>";
//4
echo date('l');
echo "<br>";
//5
function getDayName($date): void
{
    echo date('l', strtotime($date));
    echo "<br>";
}
getDayName('2026-01-22');
//6
function castSecondsToDays($sec): void {
    echo floor($sec / 60 / 60 / 24);
}
castSecondsToDays(86400);
//7
function isLeapYear($year): bool {
    if ($year % 4 == 0) return true;
    else return false;
}
var_dump(isLeapYear(2015));
//8
function isPrime($num): bool
{
    for ($i = 2, $hits = 0; $i < $num; $i++) {
        if (is_integer($num / $i)) {
            $hits++;
        }
    }
    if ($hits == 0) return true;
    else return false;
}
var_dump(isPrime(101));