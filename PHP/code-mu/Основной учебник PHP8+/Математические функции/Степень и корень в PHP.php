<?php
//1
echo pow(2,10) . '<br>';
//2
echo sqrt(245) . '<br>';
//3
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $value) {
    $sum += pow($value, 2);
}
echo sqrt($sum);