<?php
$str = 'aaa$@bbb aaa$@$@bbb aaa$@$@$@bbb';
preg_match_all('#(a+)(?:\$@)+(b+)#', $str, $match, PREG_SET_ORDER);
var_dump($match);