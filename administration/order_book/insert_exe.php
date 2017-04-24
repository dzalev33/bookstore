<?php




	$sql="INSERT INTO order_book (book_id, order_id)
VALUES (".$_POST['book_id'].",".$_POST['order_id'].")";
	
	
	$connection->query($sql); //konekcija so baza

	header("Location:?page=order_book&message=insert"); exit();

?>