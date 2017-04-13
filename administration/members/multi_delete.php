<?php
session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
    header("Location:".$settings['website_url']."administration/index.php");
}


$number_of_value=count($_POST['delete']);

$array_value=$_POST['delete'];
for($counter=0;$counter<$number_of_value;$counter++){
    $delete=$array_value[$counter];




    $sql="DELETE FROM members WHERE member_id=".$delete;


    $connection->query($sql);//execute sql


}

header("Location:index.php");exit();
?>


