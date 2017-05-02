<?php



$objectDelete= new Database();
$table_name="book";
$pk="book_id";
$pk_value=$_GET['id'];





$objectDelete->deleteINT($table_name,$pk,$pk_value);



//vrakanje na index
header("Location:?page=book&message=delete");exit();
?>