<?php
//1
date_default_timezone_set('Europe/Ulyanovsk');
echo date('H:i:s').'<br>';
//2
echo date_default_timezone_get().'<br>';
//3
date_default_timezone_set('Europe/Kirov');
echo date('H:i:s');