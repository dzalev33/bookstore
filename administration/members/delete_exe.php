<?php



$sql="DELETE FROM members WHERE member_id=".$_GET['id'];

$connection->query($sql);//execute sql

header("Location:?page=members&message=delete");exit();
?>