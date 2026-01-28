<?php
//1
$str = 'ahb acb aeb aeeb adcb axeb';
echo preg_replace('#a.b#', '+++', $str);
//2
echo '<br>';
echo preg_replace('#a..b#', '+++', $str);