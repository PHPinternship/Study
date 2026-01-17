<?php
$arr = ['a', 'b', 'c', 'd', 'e'];
$replace = ['!', 'b', 'c', '!!', 'e'];
var_dump(array_replace($arr, $replace));