<?php


$objectDelete= new Database();
$table_name="payment";
$pk="payment_id";
$pk_value=$_GET['id'];



$objectDelete->deleteINT($table_name,$pk,$pk_value);


header("Location:?page=payment&message=delete");exit();
?>