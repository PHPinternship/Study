<?php
//1
$str = 'aaa bbb ccc xyz';
echo preg_replace('#([a-z])\1\1#', '!', $str);
echo '<br>';
//2
$str = 'a aa aaa abab bbbb';
echo preg_replace('#([a-z])+\1#', '!', $str);
echo '<br>';
//3
$str = 'aaa aaa bbb bbb ccc ddd';
echo preg_replace('#([a-d]{3})\s\1#', '!', $str);