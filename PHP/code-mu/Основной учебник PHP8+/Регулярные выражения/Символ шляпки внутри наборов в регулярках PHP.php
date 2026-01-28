<?php
//1
$str = '^xx axx ^zz bkk @ss';
echo preg_replace('#[@^][A-z]{2}#','!', $str);
echo '<br>';
//2
echo preg_replace('#[^@^\s][A-z]{2}#','!', $str);
echo '<br>';
//3
$str = '^xx axx ^zz bkk';
echo preg_replace('#[^^\s][A-z]{2}#','!', $str);