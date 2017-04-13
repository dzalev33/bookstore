<?php

session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
    header("Location:".$settings['website_url']."administration/index.php");
}


$sql="UPDATE author_book SET

						Price=".$_POST['Price']."

						
			WHERE author_book_id=".$_POST['id'];

$connection->query($sql);//execute sql

header("Location:index.php");exit();

?>