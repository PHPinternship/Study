<?php
//1
$str = 'php';
echo strtoupper($str) . '<br>';
//2
$str = 'PHP';
echo strtolower($str) . '<br>';
//3
$str = 'london';
echo (ucfirst($str)) . '<br>';
//4
$str = 'London';
echo (lcfirst($str)) . '<br>';
//5
$str = 'london is the capital of great britain';
echo (ucwords($str)) . '<br>';
//6
$str = 'LONDON';
echo (ucfirst(strtolower($str))) . '<br>';
//7
$str = 'привет';
echo (mb_strtoupper($str)) . '<br>';
//8
$str = 'ПРИВЕТ';
echo (mb_strtolower($str));