<?php



$sql="DELETE FROM bucket WHERE order_id=".$_GET['id'];

$connection->query($sql);//execute sql

header("Location:?page=bucket");exit();
?>