<?php
//1
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
foreach ($arr as $item) {
    foreach ($item as $key => $value) {
        echo $key . ' - ' . $value . '<br>';
    }
    echo '<br>';
}
//2
echo '<br>';
$arr = [
    'group1'  => ['user11', 'user12', 'user13', 'user43'],
    'group2'  => ['user21', 'user22', 'user23'],
    'group3'  => ['user31', 'user32', 'user33'],
    'group4'  => ['user41', 'user42', 'user43'],
    'group5'  => ['user51', 'user52'],
];
foreach ($arr as $key => $item) {
    foreach ($item as $value) {
        echo $key . ' - ' . $value . '<br>';
    }
}