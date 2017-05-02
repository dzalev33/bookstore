<?php


$oblectEdit= new Database();

$table_name="payment";
$column_value=" card_holder_Surname='".$_POST['card_holder_Surname']."', card_number=".$_POST['card_number'].", card_expiary_date=".$_POST['card_expiary_date'].", card_type='".$_POST['card_type']."', security_code=".$_POST['security_code']." ";
$pk="payment_id";
$pk_value=$_POST['id'];

$oblectEdit->editINT($table_name,$column_value,$pk,$pk_value);


header("Location:?page=payment");exit();

?>