<?php
$date1 = '2020-11-30';
$date2 = '2020-12-01';
$time1 = mktime(0, 0, 0, $date1[1], $date1[0], $date1[2]);
$time2 = mktime(0, 0, 0, $date2[1], $date2[0], $date2[2]);
var_dump($time1 > $time2);