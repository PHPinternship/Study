<?php
//1
$arr = [1, 2, 3, 4, 5];
echo array_pop($arr).'<br>';
echo array_shift($arr).'<br>';
var_dump($arr);
//2
$arr = [1, 2, 3, 4, 5];
array_unshift($arr, 0).'<br>';
$arr[] = 6;
var_dump($arr);