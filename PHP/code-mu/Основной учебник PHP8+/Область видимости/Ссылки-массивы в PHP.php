<?php
//1
$arr1 = [1, 2, 3, 4, 5];

$arr2 = $arr1;
$arr2[0] = '!';

echo $arr1[0];
echo $arr2[0];
//2
$arr1 = [1, 2, 3, 4, 5];

$arr2 = &$arr1;
$arr1[0]++;

echo $arr1[0];
echo $arr2[0];
//3
$arr1 = [1, 2, 3, 4, 5];

$arr2 = &$arr1;

$arr1[0]++;
$arr2[0]++;

echo $arr1[0];
echo $arr2[0];