<?php




$oblectEdit= new Database();

$table_name="borrowed_by";
$column_value=" `Due_Date`=\"".$_POST['Due_Date']."\", `Return_Date`=\"".$_POST['Return_Date']."\", book_id=".$_POST[book_id].", member_id=".$_POST['member_id']." ";
$pk="borrowed_by_id";
$pk_value=$_POST['id'];

$oblectEdit->editINT($table_name,$column_value,$pk,$pk_value);


header("Location:?page=borrowed_by");exit();
?>