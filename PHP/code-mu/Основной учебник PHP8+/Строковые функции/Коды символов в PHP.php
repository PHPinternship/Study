<?php
//1
echo ord('a') . ' ' .ord('b').' '.ord('c').' '.ord(' ') . '<br>';
//2
echo '65 - 122<br>';
//3
echo chr(33) . '<br>';
//4
$str = chr(68);
echo $str . '<br>';
//5
$str = 'abcdewhatever';
//6
$str = 'a';
if (ord($str) >= 65 and ord($str) <= 90) {
    echo 'Буква большая';
} elseif (ord($str) >= 97 and ord($str) <= 122) {
    echo 'Буква маленькая';
}