<?php
    //1
    $str = '';
    for ($i = 1; $i <= 5; $i++) {
        $str .= '-';
    }
    echo $str . '<br>';
    //2
    $str = '';
    for ($i = 1; $i <= 9; $i++) {
        $str .= $i;
    }
    echo $str . '<br>';
    //3
    $str = '';
    for ($i = 9; $i >= 1; $i--) {
        $str .= $i;
    }
    echo $str . '<br>';
    //4
    $str = '-';
    for ($i = 1; $i <= 9; $i++) {
        $str .= $i . '-';
    }
    echo $str;