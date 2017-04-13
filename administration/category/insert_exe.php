<?php

session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
	header("Location:".$settings['website_url']."administration/index.php");
}




	$sql="INSERT INTO category (type)
VALUES ('".$_POST['type']."')";
	
$connection->query($sql);//konekcija

//$id=mysql_insert_id();
//header("Location:index.php?message=insert&id=".$id);exit();
	//da te vrati na strana index.php posle vnesvanje vo baza
header("Location:index.php?message=insert&id=".$_POST['type']);exit();

?>