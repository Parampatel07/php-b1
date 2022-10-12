<?php
session_start();
require_once("../include/connection.php");
var_dump($_POST);
extract($_POST);
$sql="Select email,password,id from admin where email=?";
$stat=$db->prepare($sql);
$stat->bindparam(1,$email);
$stat->setFetchMode(PDO::FETCH_ASSOC);
$stat->execute();
$row=$stat->fetchAll();
var_dump($row);
$page="../admin_login.php";
if(empty($row)==true)
{
    echo "Email is invalid ";
    $_SESSION['error']="Invalid Login attempt";
}
else
{
    if(password_verify($_POST['password'],$row[0]['password'])==true)
    {
        $_SESSION['admin_id']=$row[0]['id'];
        $_SESSION['message']="Login Succesfull";
        echo "Login succesfull";
        $page="../admin_fees_report.php";
    }
    else
    {
        echo "password is invalid ";
        $_SESSION['error']="Invalid Login attempt";
    }
}
header("location:$page");
?>