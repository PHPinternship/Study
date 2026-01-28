<form action="" method="GET">
    <label> English
        <input type="radio" name="radio" value="English" <?php
        if (!empty($_GET['radio']) and $_GET['radio'] === 'English') {
            echo 'checked';
        }
        ?>>
    </label>
    <label> Engrish
        <input type="radio" name="radio" value="Engrish" <?php
        if (!empty($_GET['radio']) and $_GET['radio'] === 'Engrish') {
            echo 'checked';
        }
        ?>>
    </label>
    <label> Russian
        <input type="radio" name="radio" value="Russian" <?php
        if (!empty($_GET['radio']) and $_GET['radio'] === 'Russian') {
            echo 'checked';
        }
        ?>>
    </label>
    <input type="submit">
</form>