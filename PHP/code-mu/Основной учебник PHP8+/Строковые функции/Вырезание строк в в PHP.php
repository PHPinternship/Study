<?php
//1
$str = 'html css php';
echo (substr($str, 0, 4)) . '<br>';
echo (substr($str, 5, 3)) . '<br>';
echo (substr($str, 9, 3)) . '<br>';
//2
$str = 'abcdefgh';
echo (substr($str, -3, 3)) . '<br>';
//3
$str = 'http://example.com';
if (str_starts_with($str, 'http://')) {
    echo 'Успех' . '<br>';
} else {
    echo 'Неуспех' . '<br>';
}
//4
$str = 'https://example.com';
if (str_starts_with($str, 'https://')) {
    echo 'string starts with "https://"' . '<br>';
} elseif (str_starts_with($str, 'http://')) {
    echo 'string starts with "http://"' . '<br>';
}
//5
$str = 'image.png';
if (str_ends_with($str, '.png')) {
    echo 'string ends with ".png"' . '<br>';
}
//6
$str = 'photo.jpg';
if (str_ends_with($str, '.png') or str_ends_with($str, '.jpg')) {
    echo 'it does' . '<br>';
}
//7
$str = 'This is a long string';
if (strlen($str) > 5) {
    echo substr($str, 0, 5) . '...' . '<br>';
} else {
    echo $str;
}
//8
$str = 'многобайтовые строки требуют особого подхода';
echo  mb_substr($str, -7, 7) . '<br>';
//9
$str = 'пример работы с кириллическими символами';
echo mb_substr($str, 7, 6) . '<br>';
echo mb_substr($str, 16, 14);
