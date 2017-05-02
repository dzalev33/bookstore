<?php




$objectDelete= new Database();
$table_name="bucket";
$pk="order_id";
$pk_value=$_GET['id'];






$objectDelete->deleteINT($table_name,$pk,$pk_value);






header("Location:?page=bucket");exit();
?>