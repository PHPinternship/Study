<?php
//1
$aaa = 111;

function func()
{
    $aaa = 222;
}

func();
echo $aaa;
//2
//$aaa = 111;
//
//function func()
//{
//    $aaa++;
//}
//
//func();
//echo $aaa;
//3
//$aaa = 111;
//
//function func()
//{
//    $aaa = 222;
//    return $aaa;
//}
//
//echo func();