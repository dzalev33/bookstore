<?php





$sql="DELETE FROM author_book WHERE author_book_id=".$_GET['id'];


$connection->query($sql);//execute sql

header("Location:?page=author_book&message=delete");exit();
?>