<?php
//1
$arr1 = [1, 2, 3];
$arr2 = ['a', 'b', 'c'];
var_dump(array_merge($arr1, $arr2));
//2
$arr1 = ['a', 'b', 'c'];
$arr2 = [1, 2, 3];
var_dump(array_combine($arr1, $arr2));