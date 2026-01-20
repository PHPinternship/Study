<?php
//1
function sum($arr): float|int
{
    return array_sum($arr);
}
//2
function divideArraySums($arr1, $arr2): float|int
{
    return array_sum($arr1) / array_sum($arr2);
}
//3
function getProduct($arr): float|int
{
    return array_product($arr);
}