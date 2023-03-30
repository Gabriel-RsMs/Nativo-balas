<?php
session_start();

if(isset($_SESSION["USER_LOG"])){
    unset($_SESSION["USER_LOG"]);
}
header("Location: ../public/index.php")
?>