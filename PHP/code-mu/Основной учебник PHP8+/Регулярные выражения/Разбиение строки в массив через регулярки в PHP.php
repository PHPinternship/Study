<?php
//1
$str = "apple,banana;cherry|date orange";
var_dump(preg_split('#[,;|]#',$str));
echo '<br>';
//2
$str = '2025-12-31 12:30:45';
var_dump(preg_split('#[\s:-]#',$str));
echo '<br>';
//3
$str = 'first.second.third.forth';
var_dump(preg_split('#\.#',$str,3));