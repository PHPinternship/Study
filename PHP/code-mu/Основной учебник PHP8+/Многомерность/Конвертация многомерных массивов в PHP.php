<?php
//1
$new_arr = [];
$countries = [
    [
        'country' => 'country1',
        'city' =>    'city1',
    ],
    [
        'country' => 'country2',
        'city' =>    'city2',
    ],
    [
        'country' => 'country1',
        'city' =>    'city3',
    ],
    [
        'country' => 'country1',
        'city' =>    'city4',
    ],
    [
        'country' => 'country3',
        'city' =>    'city5',
    ],
    [
        'country' => 'country2',
        'city' =>    'city6',
    ],
    [
        'country' => 'country3',
        'city' =>    'city7',
    ],
];
foreach ($countries as $country) {
    $new_arr[$country['country']][] = $country['city'];
}
var_dump($new_arr);
//2
$new_arr2 = [];
$list = [
    [
        'date'  => '2019-12-29',
        'event' => 'name1'
    ],
    [
        'date'  => '2019-12-31',
        'event' => 'name2'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name3'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name4'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name5'
    ],
    [
        'date'  => '2019-12-31',
        'event' => 'name6'
    ],
    [
        'date'  => '2019-12-29',
        'event' => 'name7'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name8'
    ],
    [
        'date'  => '2019-12-30',
        'event' => 'name9'
    ],
];
foreach ($list as $item) {
    $new_arr2[$item['date']][] = $item['event'];
}
var_dump($new_arr2);
//3
$new_arr3 = [];
$index = 0;
$list = [
    '2019-12-29'=> ['name1', 'name2', 'name3', 'name4'],
    '2019-12-30'=> ['name5', 'name6', 'name7'],
    '2019-12-31'=> ['name8', 'name9'],
];
foreach ($list as $items) {
    foreach ($items as $item) {
        $new_arr3[$index]['date'] = key($list);
        $new_arr3[$index]['event'] = $item;
        $index++;
    }
}
var_dump($new_arr3);
