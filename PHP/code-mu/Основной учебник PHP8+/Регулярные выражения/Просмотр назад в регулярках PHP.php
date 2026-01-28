<?php
$str = '$aaa $bbb $ccc';
preg_match_all('#(?<=\$)[a-z]+#', $str, $match);
var_dump($match);