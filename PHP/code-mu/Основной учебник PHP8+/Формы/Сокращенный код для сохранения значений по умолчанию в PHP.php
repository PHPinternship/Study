<form action="" method="get">
    <input name="day" value="<?= $_GET['day'] ?? date('d') ?>">
    <input name="month" value="<?= $_GET['month'] ?? date('m') ?>">
    <input name="year" value="<?= $_GET['year'] ?? date('Y') ?>">
    <input type="submit">
</form>
<?php if (!empty($_GET)) {
    $days = 365 - date('z', mktime(0, 0, 0, $_GET['month'], $_GET['day'], $_GET['year']));
    echo "$days days till New Year";
}
