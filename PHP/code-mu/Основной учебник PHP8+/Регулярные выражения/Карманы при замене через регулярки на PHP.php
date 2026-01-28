<?php
//1
$str = '12 34 56 78';
echo preg_replace('#(\d)(\d)#','$2$1',$str);
echo '<br>';
//2
$str = '31.12.2025';
echo preg_replace('#(\d{2})\.(\d{2})\.(\d{4})#','$3.$2.$1',$str);