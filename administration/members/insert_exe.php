<?php

session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
    header("Location:".$settings['website_url']."administration/index.php");
}




$sql="INSERT INTO members (`member_firstname`, `member_lastname`, `email`, `tell_number`, `DOB`, `Registration_Date`, `ZipCode`, `Country`, `City`, `Street`)
VALUES ('".$_POST['member_firstname']."','".$_POST['member_lastname']."','".$_POST['email']."','".$_POST['tell_number']."','".$_POST['DOB']."','".$_POST['Registration_Date']."',".$_POST['ZipCode'].",'".$_POST['Country']."','".$_POST['City']."','".$_POST['Street']."')";

$connection->query($sql);


header("Location:index.php");exit();

?>