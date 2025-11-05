<?php
$str = 'abcde';
echo '1) ' .$str[0] . $str[2] . $str[4] .'<br>';
echo '2) ' .$str[-1].'<br>';
$rts = $str[4] . $str[3] . $str[2] . $str[1] . $str[0];
echo '3) ' .$rts.'<br>';
$num = 3;
echo '4) ' .$str[$num];
