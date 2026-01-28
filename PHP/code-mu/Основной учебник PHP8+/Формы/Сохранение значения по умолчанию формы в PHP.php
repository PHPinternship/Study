<form action="" method="get">
    <label> Year
        <input name="year" value="<?php if (isset($_GET['year'])) echo $_GET['year']; else echo date('Y'); ?>">
    </label>
    <input type="submit">
</form>