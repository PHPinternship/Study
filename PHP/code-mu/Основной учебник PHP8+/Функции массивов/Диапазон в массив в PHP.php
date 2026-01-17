<?php
//1
//var_dump(range(1,100));
//2
var_dump(range('a','z'));
//3
$arr = range (1,9);
echo implode('-', $arr).'<br>';
//4
echo array_sum(range(1,100)).'<br>';
//5
echo array_product(range(1,10));