<?php
    $arr = [10, 20, 30, 40, 21, 32, 51];
    $sum = 0;
    foreach ($arr as $value) {
        $first_digit = round($value / 10);
        if ($first_digit == 1 or $first_digit == 2) {
            $sum += $value;
        }
    }
    echo $sum;