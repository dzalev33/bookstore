<?php




$sql="DELETE FROM category WHERE category_id=".$_GET['id'];

$connection->query($sql);//execute sql

header("Location:?page=category&message=delete");exit();
?>