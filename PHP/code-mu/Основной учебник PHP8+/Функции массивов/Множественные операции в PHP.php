<?php
//1
$arr1 = [1, 2, 3, 4, 5];
$arr2 = [3, 4, 5, 6, 7];
var_dump(array_intersect($arr1, $arr2));
//2
var_dump(array_merge(array_diff($arr1, $arr2), array_diff($arr2, $arr1)));