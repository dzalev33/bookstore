<?php


session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
    header("Location:".$settings['website_url']."administration/index.php");
}

$sql="UPDATE administrators SET

						`last_name`='".$_POST['last_name']."'
						
			WHERE admin_id=".$_POST['id'];

$connection->query($sql);//execute sql

header("Location:view.php?message=update");exit();
?>