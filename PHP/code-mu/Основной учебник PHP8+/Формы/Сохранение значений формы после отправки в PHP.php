<form action="" method="get">
    <label> City
        <input name="city" value="<?php if (isset($_GET['city'])) echo $_GET['city'] ?>">
    </label>
    <label> Country
        <input name="country" value="<?php if (isset($_GET['country'])) echo $_GET['country'] ?>">
    </label>
    <input type="submit">
</form>
<?= $_GET['city'] . $_GET['country'] ?>