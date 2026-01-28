<form action="" method="GET">
	<input
		type="checkbox"
		name="flag1"
        <?php if (key_exists('flag1',$_GET)):
            echo "checked";
        endif ?>
    >
    <input
        type="checkbox"
        name="flag2"
        <?php if (key_exists('flag2',$_GET)): ?>
            checked="checked"
        <?php endif ?>
    >
    <input
        type="checkbox"
        name="flag3"
        <?php if (key_exists('flag3',$_GET)): ?>
            checked="checked"
        <?php endif ?>
    >
	<input type="submit">
</form>