<?php
session_start();
if(isset($_SESSION['admin_id'])==FALSE)
{
    $_SESSION['error']="Login is Required";
    header("location:admin_login.php");
    exit();
}
?>