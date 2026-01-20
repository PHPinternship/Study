<?php
function countIterations($num): int
{
    $count = 0;
    while ($num >= 10) {
        $num /= 2;
        $count++;
    }
    return $count;
}
$iter = countIterations(100);
echo $iter;