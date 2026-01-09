<?php
//1
$arr = [];
for ($i = 0, $count = 1; $i <= 3; $i++) {
    for ($j = 0; $j <= 1; $j++) {
        $arr[$i][$j] = $count++;
    }
}
//var_dump($arr);
//2
$arr = [];
for ($i = 0, $count = 2; $i <= 3; $i++) {
    for ($j = 0; $j <= 2; $j++) {
        $arr[$i][$j] = $count;
        $count += 2;
    }
}
//var_dump($arr);
//3
$arr = [];
for ($i = 0, $count = 1; $i <= 1; $i++) {
    for ($j = 0; $j <= 1; $j++) {
        for ($k = 0; $k <= 1; $k++) {
            $arr[$i][$j][$k] = $count++;
        }
    }
}
var_dump($arr);