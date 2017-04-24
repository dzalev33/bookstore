<?php



$sql="DELETE FROM author WHERE author_id=".$_GET['id'];


$connection->query($sql);//execute sql

header("Location:?page=author&message=delete");exit();
?>