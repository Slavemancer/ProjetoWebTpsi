<form>
    <input name="pass" type="text" value="<?= $_GET["pass"] ?>">
    <input type="submit">

    <?php
    echo md5($_GET["pass"]);
