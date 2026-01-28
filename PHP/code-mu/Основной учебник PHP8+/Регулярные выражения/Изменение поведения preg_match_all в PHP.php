<?php
$str = '2023-10-29 2024-11-30 2025-12-31';
preg_match_all('#(\d{4})-(\d{2})-(\d{2})#', $str, $match, PREG_SET_ORDER);
var_dump($match);