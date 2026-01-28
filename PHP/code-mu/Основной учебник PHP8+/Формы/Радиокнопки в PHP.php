<form action="" method="get"> Choose gender:
    <label> Male
        <input type="radio" name="radio" value="male" checked>
    </label>
    <label> Female
        <input type="radio" name="radio" value="female" >
    </label>
    <input type="submit">
</form>

<?php if (isset($_GET['radio'])) {
    var_dump($_GET);
}
