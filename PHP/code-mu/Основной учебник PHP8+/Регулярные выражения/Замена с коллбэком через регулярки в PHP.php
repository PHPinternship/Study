<?php
//1
$str = 'The numbers are 3, 7 and 12';
echo preg_replace_callback('#(\d+)#', function ($match) {
    return $match[0] ** 2;
}, $str);
echo '<br>';
//2
$str = '2023-01-15 2022-12-31 2024-05-20';
echo preg_replace_callback('#(\d{4})-(\d{2})-(\d{2})#', function ($match) {
    return $match[3] .'.'. $match[2] .'.'. $match[1];
}, $str);
echo '<br>';
//3
$str = 'Costs: $15, $20, $100';
echo preg_replace_callback('#(\d+)#', function ($match) {
    return $match[0] * 1.1;
},$str);