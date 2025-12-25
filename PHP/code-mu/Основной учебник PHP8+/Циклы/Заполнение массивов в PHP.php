<?php
    //1
    $arr = [];
    for ($i = 1; $i <= 100; $i++) {
        $arr[] = $i;
    }
    //var_dump($arr); // debug
    //2
    $arr = [];
    for ($i = 1; $i <= 99; $i+=2) {
        $arr[] = $i;
    }
    var_dump($arr);