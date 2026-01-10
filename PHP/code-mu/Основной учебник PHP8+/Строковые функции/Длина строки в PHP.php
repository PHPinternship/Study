<?php
//1
$str = 'abcde';
echo strlen($str) . '<br>';
//2
$str = 'привет';
echo mb_strlen($str) . '<br>';
//3
$password = 'abcdef';
if (strlen($password) > 5 and strlen($password) < 10) {
    echo 'Пароль подходит';
}