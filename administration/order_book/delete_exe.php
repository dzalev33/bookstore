<?php


$sql="DELETE FROM order_book WHERE order_book_id=".$_GET['id'];

$connection->query($sql);//execute sql

header("Location:?page=order_book&message=delete");exit();
?>