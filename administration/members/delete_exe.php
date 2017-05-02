<?php

$objectDelete= new Database();
$table_name="members";
$pk="member_id";
$pk_value=$_GET['id'];






$objectDelete->deleteINT($table_name,$pk,$pk_value);





header("Location:?page=members&message=delete");exit();
?>