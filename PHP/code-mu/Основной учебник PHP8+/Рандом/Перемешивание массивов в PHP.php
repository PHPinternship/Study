<?php
//1
$arr = [1, 2, 3, 4, 5];
shuffle($arr);
var_dump($arr);
//2
$arr = range(1, 25);
shuffle($arr);
var_dump($arr);
//3
$arr = range('a', 'z');
shuffle($arr);
var_dump($arr);