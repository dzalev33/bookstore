<?php
session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
    header("Location:".$settings['website_url']."administration/index.php");
}
// update na bazata
$sql="UPDATE author SET

		
		`lastname`='".$_POST['lastname']."'
		`description`='".$_POST['description']."'
				WHERE author_id=".$_POST['id'];
	
//konekcija so baza
$connection->query($sql); 


//vrakanje na index strana za da ne se gledaat podatocite sto gi vnesuvame
header("Location:index.php");exit(); 

?>


