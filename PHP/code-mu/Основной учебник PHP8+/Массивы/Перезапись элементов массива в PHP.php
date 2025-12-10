<?php
    $arr = ['a' => 1, 'b' => 2, 'c' => 3];
    $arr['a'] = $arr['a'] + 3;
    $arr['b'] = $arr['b'] + 3;
    $arr['c'] = $arr['c'] + 3;
    var_dump($arr);