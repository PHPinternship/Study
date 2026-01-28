<?php
//1
$str = 'aa aba abba abbba abbbba abbbbba';
echo preg_replace('#ab{2,4}a#','!',$str);
echo '<br>';
//2
echo preg_replace('#ab{,3}a#','!',$str);
echo '<br>';
//3
echo preg_replace('#ab{4,}a#','!',$str);