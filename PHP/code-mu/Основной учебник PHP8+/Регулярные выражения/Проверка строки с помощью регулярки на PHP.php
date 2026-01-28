<?php
//1
$str = 'https eee aaa bbb 222 php jpeg';
echo preg_match('#\d{3}#', $str);
echo '<br>';
//2
echo preg_match('#^http#', $str);
echo '<br>';
//3
echo preg_match('#^https?#', $str);
echo '<br>';
//4
echo preg_match('#(txt|html|php)$#', $str);
echo '<br>';
//5
echo preg_match('#jpe?g$#', $str);