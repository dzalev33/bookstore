<?php



$sql="INSERT INTO author_book (author_id, book_id) VALUES (".$_POST['author_id'].",".$_POST['book_id'].")";

$connection->query($sql);//execute sql

header("Location:?page=author_book&message=insert&id=".$_POST['author_id']);exit();
?>