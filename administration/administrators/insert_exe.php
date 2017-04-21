<?php
session_start();
require_once '../includes/database_connect.php';


if(!isset($_SESSION['user_name'])){
    header("Location:".$settings['website_url']."administration/index.php");
}

$sql="INSERT INTO administrators (`position`, `user_name`, `password`, `first_name`, `last_name`)
VALUES ('".$_POST['position']."','".$_POST['user_name']."','".sha1($_POST['password'])."','".$_POST['first_name']."','".$_POST['last_name']."')";

$connection->query($sql);//execute sql

header("Location:view.php?message=insert");exit();
?>