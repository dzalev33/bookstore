<?php



$objectDelete= new Database();
$table_name="administrators";
$pk="admin_id";
$pk_value=$_GET['id'];

$objectDelete->deleteINT($table_name,$pk,$pk_value);

header("Location:?page=administrators&message=delete");exit();
//echo "<script>window.location.replace(\"?page=administrators&message=delete\");</script>";
