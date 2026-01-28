<?php
$arr = ['text1', 'text2', 'text3'];
echo "<select>";
foreach ($arr as $value) {
    echo "<option>$value</option>";
}
echo "</select>";