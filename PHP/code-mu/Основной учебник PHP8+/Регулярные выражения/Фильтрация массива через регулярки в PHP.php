<?php
//1
$array = ['apple', 'banana', 'cherry', 'date', 'fig'];
var_dump(preg_grep('#^b#',$array));
echo '<br>';
//2
$arr = ['error404', 'success', 'warning', 'info', 'error500'];
var_dump(preg_grep('#error#',$arr));
echo '<br>';
//3
$arr = ['123', '45.6', '78', '9.0', 'text'];
var_dump(preg_grep('#^\d+$#',$arr));
echo '<br>';
//4
$arr = [
    'user1@example.com',
    'invalid',
    'user2@test.org',
    'not-email'
];
var_dump(preg_grep('#[a-z0-9]+@[a-z0-9]+\.[a-z0-9]+#',$arr));