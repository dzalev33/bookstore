<?php




$sql="DELETE FROM borrowed_by WHERE borrowed_by_id=".$_GET['id'];

$connection->query($sql);//execute sql

header("Location:?page=borrowed_by&message=delete");exit();
?>