<?php

session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
    header("Location:".$settings['website_url']."administration/index.php");
}




$sql="UPDATE category SET 
          type='".$_POST['type']."'
            WHERE category_id=".$_POST['id'];



$connection->query($sql);//konekcija

//da te vrati na strana index.php posle vnesvanje vo baza
header("Location:index.php?message=update&id=".$_POST['type']);exit();

?>