<?php
session_start();
?>
<ul>
    <?php
    foreach ($_SESSION['data'] as $value) {
        echo "<li>$value</li>";
    }?>
</ul>