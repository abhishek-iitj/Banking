<?php
session_start();
//session_destroy();
$_SESSION['auth_login']=false;
unset($_SESSION['auth_name']);
unset($_SESSION['auth_pass']);
unset($_SESSION['auth_login']);
//session_destroy();
header("location:personal_banking.php");
?>