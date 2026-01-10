<?php
//1
$str = 'aaa bbb ccc';
$arr = explode(' ', $str);
var_dump($arr);
//2
$arr = ['a', 'b', 'c', 'd', 'e'];
$str = implode(',', $arr);
echo $str . "<br>";
//3
$str = '1234567890';
$arr = str_split($str, 2);
var_dump($arr);
//4
$arr = str_split($str, 1);
var_dump($arr);
//5
$str = chunk_split($str, 2, '-');
echo substr($str, 0, strlen($str) - 1) . '<br>';
//6
$date = '2026-01-09';
$arr = explode('-', $date);
echo $arr[2] . '-' . $arr[1] . '-' . $arr[0];
//7
$str = 'word※word※word※word';
$arr = mb_split('※', $str);
var_dump($arr);
//8
$str = 'программирование';
$arr = mb_str_split($str);
var_dump($arr);
//9
$str = 'кириллица';
$arr = mb_str_split($str, 2);
var_dump($arr);