<?php




$objectDelete= new Database();
$table_name="author";
$pk="author_id";
$pk_value=$_GET['id'];



$objectDelete->deleteINT($table_name,$pk,$pk_value);







header("Location:?page=author&message=delete");exit();
?>