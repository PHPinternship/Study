<?php
if (!isset($_COOKIE['str'])) { // если куки нет
    setcookie('str', 'eee');
    $_COOKIE['str'] = 'eee';
}

echo $_COOKIE['str']; // выведет 'eee'