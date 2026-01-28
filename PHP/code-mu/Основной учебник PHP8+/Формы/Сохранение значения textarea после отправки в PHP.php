
<form action="" method="GET">
    <label> Введите текст
        <textarea name="text"><?= $_GET['text'] ?? '' ?></textarea>
    </label>
    <input type="submit">
</form>

<?php if (key_exists('text', $_GET)) {
    echo $_GET['text']; //без транслита
}