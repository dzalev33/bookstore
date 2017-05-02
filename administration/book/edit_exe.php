<?php





$oblectEdit= new Database();

$table_name="book";
$column_value=" Title='".$_POST['Title']."', Price=".$_POST['Price'].", Language='".$_POST['Language']."', Stock=".$_POST['Stock'].", category_id=".$_POST['category_id'].",description='".$_POST['description']."' ";
$pk="book_id";
$pk_value=$_POST['id'];

$oblectEdit->editINT($table_name,$column_value,$pk,$pk_value);



header("Location:?page=book");exit();

?>


