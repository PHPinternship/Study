<?php
//1
$date = '2025-12-31';
$new_date = date_create($date);
date_modify($new_date, '2 days');
echo date_format($new_date, 'Y-m-d')."<br>";
//2
$new_date = date_create($date);
date_modify($new_date, '1 month');
date_modify($new_date, '3 days');
echo date_format($new_date, 'Y-m-d')."<br>";
//3
$new_date = date_create($date);
date_modify($new_date, '1 year');
echo date_format($new_date, 'Y-m-d')."<br>";
//4
$new_date = date_create($date);
date_modify($new_date, '-3 days');
echo date_format($new_date, 'Y-m-d')."<br>";
//5
$new_date = date_create($date);
date_modify($new_date, '-1 month');
date_modify($new_date, '-3 days');
echo date_format($new_date, 'Y-m-d');