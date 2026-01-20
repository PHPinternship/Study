<?php
function func($num): void
{
    $sum = 0;

    for ($i = 1; $i <= $num; $i++) {
        $sum += $i;
        echo $sum.'<br>';
    }
}

func(5);