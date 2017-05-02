<?php


$objectDelete= new Database();
$table_name="borrowed_by";
$pk="borrowed_by_id";
$pk_value=$_GET['id'];







$objectDelete->deleteINT($table_name,$pk,$pk_value);



header("Location:?page=borrowed_by&message=delete");exit();
?>