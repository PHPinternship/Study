<?php
//1
$arr = [
    'boys'  => [1 => 'John', 2 => 'Jack', 3 => 'Ryan'],
    'girls' => [1 => 'Emma', 2 => 'Lily', 3 => 'Anna'],
];
echo $arr['boys'][1] . ' ' . $arr['girls'][2];
//2
echo '<br>';
$arr = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];
echo $arr[0]['salary'] + $arr[2]['salary'];