<?php
//1
$arr = [1, 2, 3, 4, 5];
var_dump(in_array(3, $arr));
//2
$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
echo array_search('-', $arr).'<br>';
//3
$pos = array_splice($arr, array_search('-', $arr), 1);
var_dump($arr);