<?php


session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
    header("Location:".$settings['website_url']."administration/index.php");
}

$sql="DELETE FROM category WHERE category_id=".$_GET['id'];

$connection->query($sql);//execute sql

header("Location:index.php?message=delete");exit();
?>