<?php
if (array_key_exists('name', $_POST) and array_key_exists('age', $_POST)) {
    echo "Имя: $_POST[name]<br>Возраст: $_POST[age]";
} elseif (array_key_exists('pass', $_POST)) {
    $pass = '12345';
    if ($_POST['pass'] == $pass) {
        echo 'Пароль введен верно';
    } else {
        echo 'Пароль введен неверно';
    }
} else {
    echo 'You were born ' . date('l', mktime(0, 0, 0, $_POST['month'], $_POST['day'], $_POST['year'])) . '!';
}