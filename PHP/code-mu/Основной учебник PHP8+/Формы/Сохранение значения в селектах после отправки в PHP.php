<form action="" method="GET">
    <label> Choose country
        <select name="test">
            <option
                <?php if (!empty($_GET['test']) and $_GET['test'] === 'England') {
                echo 'selected';
                } ?>
            >England</option>
            <option
                <?php if (!empty($_GET['test']) and $_GET['test'] === 'Germany') {
                    echo 'selected';
                } ?>
            >Germany</option>
            <option
                <?php if (!empty($_GET['test']) and $_GET['test'] === 'France') {
                    echo 'selected';
                } ?>
            >France</option>
        </select>
    </label>
    <input type="submit">
</form>

<?php
if (isset($_GET['test'])) {
    var_dump($_GET);
}