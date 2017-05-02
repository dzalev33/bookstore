<?php



$objectDelete= new Database();
$table_name="author_book";
$pk="author_book_id";
$pk_value=$_GET['id'];




$objectDelete->deleteINT($table_name,$pk,$pk_value);





header("Location:?page=author_book&message=delete");exit();
?>