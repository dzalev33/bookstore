<?php

session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
	header("Location:".$settings['website_url']."administration/index.php");
}


	$sql="INSERT INTO order_book (book_id, order_id)
VALUES (".$_POST['book_id'].",".$_POST['order_id'].")";
	
	
	$connection->query($sql); //konekcija so baza

	header("Location:index.php"); exit();

?>