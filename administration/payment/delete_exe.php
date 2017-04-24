<?php



$sql="DELETE FROM payment WHERE payment_id=".$_GET['id'];

$connection->query($sql);//execute sql

header("Location:?page=payment&message=delete");exit();
?>