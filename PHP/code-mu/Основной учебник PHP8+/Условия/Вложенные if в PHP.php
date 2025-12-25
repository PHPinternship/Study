<?php
    $age = 15;
    if ($age < 10 or $age > 99) {
        echo 'Число имеет НЕ 2 разряда';

    } else {
        if ($age % 10 + floor($age / 10) <= 9) {
            echo 'Сумма цифр однозначна';
        } else {
            echo 'Сумма цифр двузначна';
        }
    }