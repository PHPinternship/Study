<?php
//1
echo date('Y:m:d-H:i:s').'<br>';
//2
echo date('Y:m:d').'<br>';
//3
echo date('d.m.Y').'<br>';
//4
echo date('d:m:Y H:i:s').'<br>';
//5
echo date('d.m.Y', mktime(0,0,0,2,12,2025)).'<br>';
//6
$arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$trunc = date('D');
foreach ($arr as $day) {
    if (str_starts_with($day, $trunc)) {
        echo $day.'<br>';
        break;
    }
}
//7
$arr = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November',
    'December'];
$trunc = date('M');
foreach ($arr as $month) {
    if (str_starts_with($month, $trunc)) {
        echo $month.'<br>';
        break;
    }
}
//8
echo date('t', time());