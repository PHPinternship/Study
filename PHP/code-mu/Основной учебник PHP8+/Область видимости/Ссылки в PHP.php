<?php
//1
//$num1 = 1;
//$num2 = $num1;
//$num2 = 2;
//
//echo $num1;
//echo $num2;
//2
//echo "<br>";
//$num1 = 1;
//$num2 = &$num1;
//$num2++;
//
//echo $num1;
//echo $num2;
//echo "<br>";
//3
//$num1 = 1;
//$num2 = $num1;
//
//$num1++;
//$num2++;
//
//echo $num1;
//echo $num2;
//4
$num1 = 1;
$num2 = &$num1;

$num1++;
$num2++;

echo $num1;
echo $num2;