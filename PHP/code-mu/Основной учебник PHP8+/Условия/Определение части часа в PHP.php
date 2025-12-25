<?php
    $min = 21;
    if ($min >= 0 and $min < 20) {
        echo '1ая треть часа';
    }
    if ($min >= 20 and $min < 40) {
        echo '2ая треть часа';
    }
    if ($min >= 40 and $min < 60) {
        echo '3ья треть часа';
    }
