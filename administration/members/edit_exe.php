<?php









$oblectEdit= new Database();

$table_name="members";
$column_value=" member_firstname='".$_POST['member_firstname']."', member_lastname='".$_POST['member_lastname']."', email='".$_POST['email']."',
tell_number='".$_POST['tell_number']."', DOB='".$_POST['DOB']."', Registration_Date='".$_POST['Registration_Date']."', ZipCode=".$_POST['ZipCode'].",
 Country='".$_POST['Country']."', City='".$_POST['City']."', Street='".$_POST['Street']."' ";
$pk="member_id";
$pk_value=$_POST['id'];

$oblectEdit->editINT($table_name,$column_value,$pk,$pk_value);


header("Location:?page=members&message=update");exit();

?>