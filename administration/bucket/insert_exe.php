<?php


session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
    header("Location:".$settings['website_url']."administration/index.php");
}

$sql="INSERT INTO bucket (Quantity, Total_Price)
VALUES ('".$_POST['Quantity']."',".$_POST['Total_Price'].")";

$connection->query($sql);//konekcija

//da te vrati na strana index.php posle vnesvanje vo baza
header("Location:index.php");exit(); 

?>