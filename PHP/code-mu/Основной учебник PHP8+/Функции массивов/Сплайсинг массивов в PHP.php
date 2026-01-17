<?php
//1
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1,2);
var_dump($arr);
//2
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 0,1);
array_splice($arr, -1,1);
var_dump($arr);
//3
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 3,0,['a','b','c']);
var_dump($arr);
//4
$arr = [1, 2, 3, 4, 5];
array_splice($arr, 1,0,['a','b']);
array_splice($arr, 6,1,['c',5,'e']);
var_dump($arr);