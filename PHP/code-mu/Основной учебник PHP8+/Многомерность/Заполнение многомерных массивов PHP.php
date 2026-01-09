<?php
//1
$arr = [];
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        $arr[$i][$j] = $j;
    }
}
//2
echo '<br>';
$arr = [];
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 4; $j++) {
        $arr[$i][$j] = 'x';
    }
}
//3
echo '<br>';
$arr = [];
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 2; $j++) {
        for ($k = 1; $k <= 5; $k++) {
            $arr[$i][$j][$k] = $arr[$j];
        }
    }
}
var_dump($arr);