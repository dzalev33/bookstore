<?php




//brisenje na zapis od bazata po url
$sql="DELETE FROM book WHERE book_id=".$_GET['id'];

//konekcija so baza
$connection->query($sql);//execute sql

//vrakanje na index
header("Location:?page=book&message=delete");exit();
?>