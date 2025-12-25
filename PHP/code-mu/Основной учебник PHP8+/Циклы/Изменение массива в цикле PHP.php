<?php
    $arr = [1, 2, 3, 4, 5];
    $iter = 0;
    foreach ($arr as $value) {
        $arr[$iter] **= 2;
        $iter++;
    }
    var_dump($arr);