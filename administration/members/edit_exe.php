<?php

session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
    header("Location:".$settings['website_url']."administration/index.php");
}




$sql="UPDATE members SET 

          member_firstname='".$_POST['member_firstname']."',
            member_lastname='".$_POST['member_lastname']."',
              email='".$_POST['email']."',
                tell_number='".$_POST['tell_number']."',
                  DOB='".$_POST['DOB']."',
                    Registration_Date='".$_POST['Registration_Date']."',
                      ZipCode=".$_POST['ZipCode'].",
                        Country='".$_POST['Country']."',
                          City='".$_POST['City']."',
                            Street='".$_POST['Street']."'
                                WHERE member_id=".$_POST['id'];

$connection->query($sql);


header("Location:index.php");exit();

?>