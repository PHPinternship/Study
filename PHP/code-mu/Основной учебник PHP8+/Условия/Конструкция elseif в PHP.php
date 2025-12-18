<?php
$day = 33;
if ($day >= 1 and $day < 10) {
    echo '1 декада';
} else if ($day >= 10 and $day < 20) {
    echo '2 декада';
} else if ($day >= 20 and $day < 32) {
    echo '3 декада';
} else {
    echo 'Ошибка';
}