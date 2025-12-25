<?php
    //1
    $num1 = '1';
    $num2 = '2';

    //if ($num1 + $num2 === '3') {
    if ((int) $num1 + (int) $num2 == '3') {
        echo '+++'; // должно вывести это
    } else {
        echo '---';
    }
    //2
    echo '<br>';
    $num = 123;
    $str = (string) $num;
    if ($str[0] == 1) {
        echo '+++';
    } else {
        echo '---';
    }
    //3
    echo '<br>';
    if ((int) $str[0] === 1) {
        echo '+++';
    } else {
        echo '---';
    }
    //4
    echo '<br>';
    if ((int) $str[0] === 1) {
        echo '+++';
    } else {
        echo '---';
    }
    //5
    echo '<br>';
    $num = 12;

    if (strlen($num) === 2) {
        echo '+++';
    } else {
        echo '---';
    }
    //6
    echo '<br>';
    $num = 123;
    $str = (string) $num;

    if ($str[0] === '1') {
        echo '+++';
    } else {
        echo '---';
    }
    //7
    echo '<br>';
    $num = 12;
    $str = (int) $num; // redundant

    if (strlen($str) === 2) {
        echo '+++';
    } else {
        echo '---';
    }
    //8
    echo '<br>';
    $num = 1;

    if ($num !== 1) { // взаимоисключающие условия
        echo '+++';
    } else {
        echo '---'; // должно вывести это
    }
    //9
    echo '<br>';
    $var1 = 1;
    $var2 = 2;

    if ($var1 + 1 === $var2) {
        echo '+++'; // должно сработать это
    } else {
        echo '---';
    }