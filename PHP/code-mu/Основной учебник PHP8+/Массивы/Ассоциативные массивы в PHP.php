<?php
    $user = [
        'name' => 'user1',
        'surname' => 'user2',
        'patronymic' => 'user3'
    ];
    echo '1) ' . $user['name'] . ' ' . $user['surname'] . ' ' . $user['patronymic'] . '<br>';
    $day = [
        '1' => 'monday',
        '2' => 'tuesday',
        '3' => 'wednesday',
        '4' => 'thursday',
        '5' => 'friday',
        '6' => 'saturday',
        '7' => 'sunday'
    ];
    echo '1) ' . $day['1'] . ' ' . $day['2'] . ' ' . $day['3'] . ' ' . $day['4'] . ' ' . $day['5'] . ' ' . $day['6'] .
        ' ' . $day['7'];