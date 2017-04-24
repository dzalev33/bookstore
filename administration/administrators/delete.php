<?php





$sql="DELETE FROM administrators WHERE admin_id=".$_GET['id'];

$connection->query($sql);//execute sql

header("Location:?page=category&message=delete");exit();
?>