<?php






$oblectEdit= new Database();

$table_name="category";
$column_value=" type='".$_POST['type']."' ";
$pk="category_id";
$pk_value=$_POST['id'];

$oblectEdit->editINT($table_name,$column_value,$pk,$pk_value);




//da te vrati na strana index.php posle vnesvanje vo baza
header("Location:?page=category&message=update&id=".$_POST['type']);exit();

?>