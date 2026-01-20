<?php
//1
$num = 1;

function func(&$num): void
{
    $num++;
}

func($num);
echo $num; // должно вывести 2
//2
$arr = [1, 2, 3, 4, 5];

function func1(&$arr): void
{
    $arr[0] = '!';
}

func1($arr);
var_dump($arr);