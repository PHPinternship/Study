<?php
    $day = 12;
    if ($day >= 1 and $day < 10) {
        echo '1 декада';
    } else if ($day >= 10 and $day < 20) {
        echo '2 декада';
    } else if ($day >= 20) {
        echo '3 декада';
    }