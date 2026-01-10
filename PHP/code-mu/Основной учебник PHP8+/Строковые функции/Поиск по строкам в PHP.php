<?php
//1
$str = 'abc abc abc';
echo strpos($str, 'b') . '<br>';
//2
echo strrpos($str, 'b') . '<br>';
//3
echo strpos($str, 'b', 3) . '<br>';
//4
$str = 'aaa aaa aaa aaa aaa';
$space = strpos($str, ' ');
echo strpos($str, ' ', $space + 1) . '<br>';
//5
$str = 'example..com';
if (str_contains($str, '..')) {
    echo 'string contains ".."' . '<br>';
}
//6
$str = 'http://example.com';
if (str_starts_with($str, 'http://')) {
    echo 'string starts with "http://"';
}