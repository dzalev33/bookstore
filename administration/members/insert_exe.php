<?php






$sql="INSERT INTO members (`member_firstname`, `member_lastname`, `email`, `tell_number`, `DOB`, `Registration_Date`, `ZipCode`, `Country`, `City`, `Street`)
VALUES ('".$_POST['member_firstname']."','".$_POST['member_lastname']."','".$_POST['email']."','".$_POST['tell_number']."','".$_POST['DOB']."','".$_POST['Registration_Date']."',".$_POST['ZipCode'].",'".$_POST['Country']."','".$_POST['City']."','".$_POST['Street']."')";

$connection->query($sql);


header("Location:?page=members&message=insert\"");exit();

?>