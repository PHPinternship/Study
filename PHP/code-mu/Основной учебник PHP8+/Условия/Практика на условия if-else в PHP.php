<?php
    //1
    $month = 5;
    if ($month >= 1 and $month <= 3) {
        echo 'Spring';
    } else if ($month > 3 and $month <= 6) {
        echo 'Summer';
    } else if ($month > 6 and $month <= 9) {
        echo 'Fall';
    } else if ($month > 9 and $month <= 12) {
        echo 'Winter';
    } else {
        echo 'Число вне диапазона 1 - 12';
    }
    //2
    echo '<br>';
    $str = 'abcde';
    echo $str[0] === 'a';
    //3
    echo '<br>';
    $num = 42345;
    $first_digit = floor($num / (10 ** (strlen($num) - 1)));
    var_dump($first_digit == 1 or $first_digit == 2 or $first_digit == 3);
    //4
    echo '<br>';
    $num = 456;
    $first_digit = $num % 10;
    $second_digit = floor($num % 100 / 10);
    $last_digit = floor($num / 100);
    echo $first_digit + $second_digit + $last_digit;
    //5
    echo '<br>';
    $num = 124151;
    $first_half = $num / 1000;
    $first_digit = $first_half % 10;
    $second_digit = floor($first_half % 100 / 10);
    $last_digit = floor($first_half / 100);
    $first_half = $first_digit + $second_digit + $last_digit;
    $second_half = $num % 1000; //дублирование кода, но как создавать свои функции мы на этом этапе знать не должны =)
    $first_digit = $second_half % 10;
    $second_digit = floor($second_half % 100 / 10);
    $last_digit = floor($second_half / 100);
    $second_half = $first_digit + $second_digit + $last_digit;
    if ($first_half == $second_half) {
        echo 'Сумма первых трех цифр равняется сумме вторых трех цифр. ' . '(' . $first_half .' и '. $second_half . ')';
    } else {
        echo 'Сумма первых трех цифр не равняется сумме вторых трех цифр. ' . '(' . $first_half .' и '. $second_half . ')';
    }