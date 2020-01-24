<?php
if (!isset($_SESSION["user_id"])) {
    header("Location:index.php");
    exit();
} else if ($_SESSION["user_id"] == null) {
    header("Location:index.php");
    exit();
}
