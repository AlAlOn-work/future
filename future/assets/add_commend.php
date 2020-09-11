<?php
require_once "bd.php";

function safe($s) {
    $s = addslashes($s);
    return $s;
}

if (isset($_POST)) {
    $_POST["name"] = safe($_POST["name"]);
    $_POST["message"] = safe($_POST["message"]);
    mysqli_query($link, "INSERT INTO `commends`(`Time`, `Date`, `Author`, `Text`) VALUES (CURRENT_TIME, CURRENT_DATE, '".$_POST["name"]."', '".$_POST["message"]."');");
}
header("Location: ".$_SERVER["HTTP_REFERER"]);