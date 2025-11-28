<?php
function joinNumbersFromRange($start, $end)
{
    $i = $start;
    $result = '';

    while ($i <= $end) {
        $result = "{$result}{$i}";
        $i = $i + 1;
    }

    return $result;
}