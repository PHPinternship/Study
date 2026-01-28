<?php
if (empty($_POST)) {
    echo $_GET['test1'] + $_GET['test2'] + $_GET['test3'];
} elseif (empty($_GET)) {
    var_dump($_POST);
}