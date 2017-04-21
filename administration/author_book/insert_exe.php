<?php

session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
    header("Location:".$settings['website_url']."administration/index.php");
}

$sql="INSERT INTO author_book (author_id, book_id) VALUES (".$_POST['author_id'].",".$_POST['book_id'].")";

$connection->query($sql);//execute sql

header("Location:view.php?message=insert&id=".$_POST['author_id']);exit();
?>