<?php
session_start();
if (isset($_GET['name'], $_GET['age'], $_GET['salary'], $_GET['else'])) {
    $_SESSION['data'] = $_GET;
}
?>
<form action="" method="get">
    <label> Name
        <input name="name">
    </label>
    <label> Age
        <input name="age">
    </label>
    <label> Salary
        <input name="salary">
    </label>
    <label> Something else
        <input name="else">
    </label>
    <input type="submit">
</form>
