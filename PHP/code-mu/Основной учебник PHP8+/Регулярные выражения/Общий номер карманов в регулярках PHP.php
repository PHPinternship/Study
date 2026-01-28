<?php
$arr = [
    '31-12-2025',
    '30-11-1995',
    '29-10-1990',
];
foreach ($arr as $value) {
    preg_match('#(\d{2})-(\d{2})-(?|19(\d{2})|20(\d{2}))#', $value, $match);
    var_dump($match);
}