<?php
//1
$str = 'file.*.txt';
echo preg_quote($str);
echo '<br>';
//2
$str = 'price+[10-20]';
echo preg_quote($str);
echo '<br>';
//3
$str = 'user\name@domain.com';
echo preg_quote($str);