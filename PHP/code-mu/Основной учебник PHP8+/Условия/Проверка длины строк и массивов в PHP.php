<?php
    $arr = [1, 2, 4];
    if (count($arr) == 3) {
        echo array_sum($arr);
    } else {
        echo 'В массиве не 3 элемента';
    }