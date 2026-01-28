<?php
session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    if ($_SESSION['counter'] == 10) {
        $_SESSION['counter'] = null;
    } else {
        $_SESSION['counter']++;
    }
}

echo $_SESSION['counter'];