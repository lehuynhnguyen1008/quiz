<?php
session_start();
unset($_SESSION["name"]);
header("Location:../pages/sign-in.php");
?>