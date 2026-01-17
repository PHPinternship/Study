<?php
//1
echo mt_rand(1,100);
//2
$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[] = mt_rand(1, 99);
}
var_dump($arr);