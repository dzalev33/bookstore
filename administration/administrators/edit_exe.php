<?php



$oblectEdit= new Database();

$table_name="administrators";
$column_value=" `last_name`='".$_POST['last_name']."' ";
$pk="admin_id";
$pk_value=$_POST['id'];

$oblectEdit->editINT($table_name,$column_value,$pk,$pk_value);


header("Location:?page=administrators&message=update");exit();

?>




