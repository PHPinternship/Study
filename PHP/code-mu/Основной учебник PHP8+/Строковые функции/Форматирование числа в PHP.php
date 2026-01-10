<?php
//1
$str = '12345678';
echo number_format($str,0,'',' ') . '<br>';
//2
$number = 9876543.21;
echo number_format($number,2,'.',' ') . '<br>';
//3
$price = 1234.5678;
echo '€' . number_format($price,2,',','.') . '<br>';
