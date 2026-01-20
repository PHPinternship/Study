<?php
//1
echo time().'<br>';
//2
echo mktime(0,0,0,3,1,2025).'<br>';
//3
$year = date('Y');
echo mktime(0,0,0,12,31,$year).'<br>';
//4
echo time() - mktime(13,12,59,3,15,2000).'<br>';
//5
echo (time() + 3600 * 4) - mktime(7,23,48, date('n'), date('j'),date('Y'));
//+timezone
