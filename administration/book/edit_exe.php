<?php

session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
    header("Location:".$settings['website_url']."administration/index.php");
}


$sql="UPDATE book SET


			Title='".$_POST['Title']."',
			Price=".$_POST['Price'].",
			Language='".$_POST['Language']."', 
			Stock=".$_POST['Stock'].",
			category_id=".$_POST['category_id']."
			description='".$_POST['description']."',
			WHERE book_id=".$_POST['id'];


$connection->query($sql);//execute sql








header("Location:index.php");exit();

?>


