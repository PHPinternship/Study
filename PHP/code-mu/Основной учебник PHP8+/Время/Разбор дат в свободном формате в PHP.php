<?php
//1
$date = '2025-12-31';
echo date('d-m-Y', strtotime($date)).'<br>';
//2
$date = 'Monday';
echo date('m.d.Y', strtotime($date)).'<br>';
//3
$date = strtotime('next month');
echo date('m.d.Y',mktime(0,0,0,date("m", $date), 1, date("Y", $date))).'<br>';
//4
$date = '2023-12-25';
echo date('D', strtotime($date));