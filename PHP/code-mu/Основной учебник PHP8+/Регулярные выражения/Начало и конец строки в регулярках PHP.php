<?php
//1
$str = 'abc def xyz';
echo preg_replace('#^[A-z]+#','!', $str);
echo '<br>';
//2
echo preg_replace('#[A-z]+$#','!', $str);
echo '<br>';
//3
$str = '$aaa$ $bbb$ $ccc$';
echo preg_replace('#\$[A-z]+\$$#','!', $str);