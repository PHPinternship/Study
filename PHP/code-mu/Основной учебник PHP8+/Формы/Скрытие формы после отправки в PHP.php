<?php
if (key_exists('name',$_GET)) {
    echo "Hello, $_GET[name]!";
    } else {
    ?>
<form action="" method="GET">
    <label > Name
        <input name="name">
    </label >
    <input type="submit">
</form>
<?php } ?>
