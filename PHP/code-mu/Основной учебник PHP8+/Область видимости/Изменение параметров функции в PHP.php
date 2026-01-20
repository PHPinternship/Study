<?php
//1
$aaa = 'a';

function func($bbb): void
{
    $bbb = 'b';
}

func($aaa);
echo $aaa;
//2
//$aaa = 'a';
//
//function func1($bbb)
//{
//    $bbb = 'b';
//}
//
//func1($aaa);
//echo $bbb;
//3
$str = 'a';

function func3($str): void
{
    $str = 'b';
}

func3($str);
echo $str;
//4
$arr = [1, 2, 3, 4, 5];

function func4($arr): void
{
    $arr[0] = '!';
}

func4($arr);
var_dump($arr);