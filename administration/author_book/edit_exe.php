<?php


$sql="UPDATE author_book SET

						Price=".$_POST['Price']."

						
			WHERE author_book_id=".$_POST['id'];

$connection->query($sql);//execute sql

header("Location:?page=author_book&message=update");exit();




?>