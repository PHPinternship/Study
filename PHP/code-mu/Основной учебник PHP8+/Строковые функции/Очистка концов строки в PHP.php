<?php
//1
$str = 'sad     ';
echo trim($str) . '<br>';
//2
$str = '/php/';
echo ltrim(rtrim($str, '/'),'/') . '<br>';
//3
$str = 'text text text.';
$str = rtrim($str, '.') . '.';
echo $str;