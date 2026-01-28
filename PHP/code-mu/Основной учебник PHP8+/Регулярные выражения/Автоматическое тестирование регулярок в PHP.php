<?php
$regex = '#\d+,\d+#';
$arr[] = 'No numbers here';
$arr[] = '1 number here';
$arr[] = '200 numbers here';
$arr[] = 'Well, there are, like, 122,567 possibilities if not more';
$arr[] = "The number could be 123,456, but I'm not sure";
foreach ($arr as $str) {
    echo preg_match($regex, $str) . '<br>';
}