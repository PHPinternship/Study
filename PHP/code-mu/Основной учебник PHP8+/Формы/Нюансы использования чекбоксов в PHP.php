<form action="" method="GET">
	<input type="hidden" name="flag" value="0">
    <label> Are you at least 18 years old?
        <input type="checkbox" name="flag" value="1">
    </label>
    <input type="submit">
</form>

<?php
if (key_exists('flag',$_GET)) {
    if ($_GET['flag'] == '1') {
        echo 'You\'ve answered "Yes"';
    } else {
        echo 'You\'ve answered "No"';
    }
}