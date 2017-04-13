<?php

session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
    header("Location:".$settings['website_url']."administration/index.php");
}


//brisenje na zapis od bazata po url
$sql="DELETE FROM book WHERE book_id=".$_GET['id'];

//konekcija so baza
$connection->query($sql);//execute sql

//vrakanje na index
header("Location:index.php");exit();
?>