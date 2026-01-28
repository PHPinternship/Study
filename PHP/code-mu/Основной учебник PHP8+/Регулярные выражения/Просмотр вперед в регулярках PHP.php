<?php
//1
$str = 'func1() func2() func3()';
preg_match_all('#[a-z0-9]+(?=\(\))#', $str, $match);
var_dump($match);
//2
$str = '<a href="" class="eee" id="zzz">';
preg_match_all('#(?<=")[a-z]*(?=")#', $str, $match);
var_dump($match);