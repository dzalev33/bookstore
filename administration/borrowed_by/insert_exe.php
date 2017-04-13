<?php


session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
    header("Location:".$settings['website_url']."administration/index.php");
}



$sql="INSERT INTO borrowed_by (Due_Date, Return_Date,book_id,member_id)
VALUES (\"".$_POST['Due_Date']."\",\"".$_POST['Return_Date']."\",".$_POST['book_id'].",".$_POST['member_id'].")";


$connection->query($sql);//execute sql

header("Location:index.php");exit();
//'".$_POST['Due_Date']."',
?>