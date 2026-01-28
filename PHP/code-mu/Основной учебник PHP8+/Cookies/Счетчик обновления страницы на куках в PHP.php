<?php
if (!isset($_COOKIE['time'])) {
    setcookie('time', time());
} else {
    echo 'Пользователь зашел на сайт ' . time() - $_COOKIE['time'] . ' секунд назад';
}