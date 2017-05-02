<?php






//$sql="INSERT INTO members (`member_firstname`, `member_lastname`, `email`, `tell_number`, `DOB`, `Registration_Date`, `ZipCode`, `Country`, `City`, `Street`)
//VALUES ('".$_POST['member_firstname']."','".$_POST['member_lastname']."','".$_POST['email']."','".$_POST['tell_number']."','".$_POST['DOB']."','".$_POST['Registration_Date']."',".$_POST['ZipCode'].",'".$_POST['Country']."','".$_POST['City']."','".$_POST['Street']."')";
//
//$connection->query($sql);
//
//
//header("Location:?page=members&message=insert\"");exit();


$firstName=($_POST['member_firstname']);
$memberLastName=($_POST['member_lastname']);
$memberEmail=($_POST['email']);
$memberTellNumber=($_POST['tell_number']);
$memberDOB=($_POST['DOB']);
$memberRegDate=($_POST['Registration_Date']);
$memberZipCode=($_POST['ZipCode']);
$memberCountry=($_POST['Country']);
$memberCity=($_POST['City']);
$memberstreet=($_POST['Street']);

$oblectEdit= new Database();
$table_name=" members ";
$column_name=" `member_firstname`, `member_lastname`, `email`, `tell_number`, `DOB`, `Registration_Date`, `ZipCode`, `Country`, `City`, `Street` ";
$column_value=" '".$firstName."','".$memberLastName."','".$memberEmail."','".$memberTellNumber."','".$memberDOB."','".$memberRegDate."','".$memberZipCode."','".$memberCountry."','".$memberCity."','".$memberstreet."' ";

$oblectEdit->insert($table_name, $column_name, $column_value);
header("Location:?page=members&message=insert");exit();

?>