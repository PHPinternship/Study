<form action="" method="GET">
    <label> Choose country
        <select name="test">
            <option>England</option>
            <option>Germany</option>
            <option>France</option>
        </select>
    </label>
    <input type="submit">
</form>

<?php
if (isset($_GET['test'])) {
    var_dump($_GET);
}