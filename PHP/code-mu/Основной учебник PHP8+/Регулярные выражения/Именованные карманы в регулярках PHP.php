<?php
//1
$str = '12:59:59';
preg_match_all('#(?<hours>\d{2}):(?<minutes>\d{2}):(?<seconds>\d{2})#', $str, $match);
var_dump($match);
//2
function deleteRedundant(&$match): void
{
    foreach ($match as $key => $item) {
        if (is_integer($key)) {
            unset($match[$key]);
        }
    }
}
deleteRedundant($match);
var_dump($match);
