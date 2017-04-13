<?php

session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
    header("Location:".$settings['website_url']."administration/index.php");
}


$sql="UPDATE borrowed_by SET


		
				`Due_Date`=\"".$_POST['Due_Date']."\",
				`Return_Date`=\"".$_POST['Return_Date']."\",
	            book_id=".$_POST[book_id].",
                member_id=".$_POST['member_id']."
			
			  	WHERE borrowed_by_id=".$_POST['id'];



$connection->query($sql);//execute sql




header("Location:index.php");exit();

?>


