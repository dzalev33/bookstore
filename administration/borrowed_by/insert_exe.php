<?php




$sql="INSERT INTO borrowed_by (Due_Date, Return_Date,book_id,member_id)
VALUES (\"".$_POST['Due_Date']."\",\"".$_POST['Return_Date']."\",".$_POST['book_id'].",".$_POST['member_id'].")";


$connection->query($sql);//execute sql

header("Location:?page=borrowed_by");exit();
//'".$_POST['Due_Date']."',
?>