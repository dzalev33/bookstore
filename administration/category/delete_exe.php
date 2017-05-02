<?php

$objectDelete= new Database();
$table_name="category";
$pk="category_id";
$pk_value=$_GET['id'];


$objectDelete->deleteINT($table_name,$pk,$pk_value);


header("Location:?page=category&message=delete");exit();
?>