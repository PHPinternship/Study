<?php
//1
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo array_rand($arr).'<br>';
//2
echo $arr[array_rand($arr)];