<form action="" method="GET">
    <label> Please leave a comment
        <textarea name="comment"></textarea>
    </label>
    <input type="submit">
</form>

<?php if (key_exists('comment',$_GET)) {
    echo "$_GET[comment]";
}