<?php
//1
$arr = [1, 2, 3, 4, 5];

foreach ($arr as &$elem) {
    $elem = sqrt($elem);
}

var_dump($arr);
//2
$arr = [1, 2, 3, 4, 5];

foreach ($arr as &$elem) {
    $elem **= 2;
}

var_dump($arr);