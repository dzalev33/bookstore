<?php


$oblectEdit= new Database();

$table_name="author";
$column_value=" `firstname`='".$_POST['firstname']."', `lastname`='".$_POST['lastname']."' ";
$pk="author_id";
$pk_value=$_POST['id'];

$oblectEdit->editINT($table_name,$column_value,$pk,$pk_value);








//vrakanje na index strana za da ne se gledaat podatocite sto gi vnesuvame
header("Location:?page=author");exit();
?>
