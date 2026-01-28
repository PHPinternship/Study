<?php
session_start();
if (!isset($_SESSION['time'])) {
    $_SESSION['time'] = time();
} else {
    echo 'Пользователь зашел на сайт ' . time() - $_SESSION['time'] . ' секунд назад';
}