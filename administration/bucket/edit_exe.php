<?php


$oblectEdit= new Database();

$table_name="bucket";
$column_value=" Quantity='".$_POST['Quantity']."', Total_Price='".$_POST['Total_Price']."' ";
$pk="order_id";
$pk_value=$_POST['id'];

$oblectEdit->editINT($table_name,$column_value,$pk,$pk_value);

//da te vrati na strana index.php posle vnesvanje vo baza
header("Location:?page=bucket&message=update");exit();

?>