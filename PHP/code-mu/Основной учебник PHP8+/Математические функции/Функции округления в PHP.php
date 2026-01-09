<?php
//1
$num = 379;
echo round(sqrt($num)) . '<br>';
echo round(sqrt($num), 1) . '<br>';
echo round(sqrt($num), 2);
//2
$num = 587;
$arr = ['floor' => floor(sqrt($num)), 'ceil' => ceil(sqrt($num))];
var_dump($arr);
