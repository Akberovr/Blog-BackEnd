<?php
session_start();
ob_start();
$_SESSION['login']  = false;
header('Location:login.php');
?>