<?php



$objectDelete= new Database();
$table_name="order_book";
$pk="order_book_id";
$pk_value=$_GET['id'];






$objectDelete->deleteINT($table_name,$pk,$pk_value);



echo "<script>window.location.replace(\"?page=order_book&message=delete\");</script>";





?>