<?php
//1
$arr = ['user1', 'user2', 'user3'];
foreach ($arr as $elem): ?>
	<div><h2><?= $elem ?></h2><p>text</p></div>
<?php endforeach; ?>

<br><br>

<?php
//2
$arr = [
    [
        'name' => 'user1',
        'age'  => 30,
    ],
    [
        'name' => 'user2',
        'age'  => 31,
    ],
    [
        'name' => 'user3',
        'age'  => 32,
    ],
];
foreach ($arr as $elem): ?>
    <div><p>name: <?= $elem['name'] ?></p><p>age: <?= $elem['age'] ?></p></div>
<?php endforeach; ?>