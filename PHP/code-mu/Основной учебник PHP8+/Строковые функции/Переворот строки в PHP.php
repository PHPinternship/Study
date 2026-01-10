<?php
//1
$str = '12345';
echo strrev($str) . '<br>';
//2
$str = 'madam';
if (strrev($str) == $str) {
    echo 'Слово является палиндромом';
}