<form action="" method="get">
    <label> Name
        <input name="name">
    </label>
    <input type="checkbox" name="greet">
    <input type="submit">
</form>

<?php if(key_exists('name', $_GET)) {
    if (isset($_GET['greet'])) {
        echo "Greetings, $_GET[name]";
    } else {
        echo "Farewell, $_GET[name]";
    }
}