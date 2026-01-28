<form action="" method="GET">
    <label> First Name
        <input name="f_name">
    </label>
    <label> Middle Name
        <input name="m_name">
    </label>
    <label> Surname
        <input name="s_name">
    </label>
    <input type="submit">
</form>

<?php
if (!empty($_GET)) {
    echo "$_GET[f_name] $_GET[m_name] $_GET[s_name]";
}
?>