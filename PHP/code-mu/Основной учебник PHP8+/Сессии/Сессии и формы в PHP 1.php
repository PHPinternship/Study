<?php
session_start();
if (isset($_GET['surname'])) {
    $_SESSION['surname'] = $_GET['surname'];
}
if (isset($_GET['age'])) {
    $_SESSION['age'] = $_GET['age'];
}
?>
<form action="" method="get">
    <label> Surname
        <input name="surname">
    </label>
    <label> Age
        <input name="age">
    </label>
    <input type="submit">
</form>
