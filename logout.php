<?php
session_start();
session_destroy();
if (isset($_SESSION["usename"])) {
    header("location: dashbord.php");
    die();
 }
else {
    header("location: index.php");
}
?>