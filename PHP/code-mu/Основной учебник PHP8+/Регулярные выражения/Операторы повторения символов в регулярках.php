<?php
//1
$str = 'aa aba abba abbba abca abea';
echo preg_replace('#ab+a#','+',$str);
echo '<br>';
//2
echo preg_replace('#ab*a#','+',$str);
echo '<br>';
//3
echo preg_replace('#ab?a#','+',$str);
echo '<br>';
//4
echo preg_replace('#ab*a#','+',$str);
echo '<br>';