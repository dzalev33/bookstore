<?php


$sql="INSERT INTO administrators (`position`, `user_name`, `password`, `first_name`, `last_name`)
VALUES ('".$_POST['position']."','".$_POST['user_name']."','".sha1($_POST['password'])."','".$_POST['first_name']."','".$_POST['last_name']."')";

$connection->query($sql);//execute sql

header("Location:?page=administrators&message=insert");exit();
?>