<?php

session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
    header("Location:".$settings['website_url']."administration/index.php");
}

echo "

<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
<head>

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 100%;
    background-color: #f1f1f1;
    
    font-size: small;

}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #838783;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>

<link href=\"".$settings['website_url']."administration/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
<meta name=\"viewport\" content=\"width=device-width\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
<title>".$settings['title']."</title>
</head>
<body>

<div id=\"Header\">

<ul class=\"topnav\" id=\"myTopnav\">
   <li><a href = \"AdminPage.html\">Admin</a></li>
  <li><a href=\"Login.html\">Login</a></li>
 
</ul>





</div>
<div id=\"Left\" >
<div>
<img src=\"".$settings['website_url']."administration/img/kniga_logo.jpg\"align=\"top\" id=\"Logo\">
</div>";
require_once '../includes/menu_administration.php';
echo "
  

  
</div>
<div id=\"Content\">
<form name=\"myForm\" action=\"insert_exe.php\" method=\"post\" onsubmit=\"return validationMember()\">
<table border=\"1\" style=\"border: black\" align=\"left\">
									
<tr><td> Member name</td><td><input type=\"text\" name=\"member_firstname\" value=\"\" /></td></tr>
    <tr><td>Member Surname</td><td><input type=\"text\" name=\"member_lastname\" value=\"\" /></td></tr>
    <tr><td>email</td><td><input type=\"text\" name=\"email\" value=\"\" /></td></tr>
    <tr><td>tell number</td><td><input type=\"text\" name=\"tell_number\" value=\"\" /></td></tr>   				
     <tr><td>Date of Birth</td><td><input type=\"text\" name=\"DOB\" value=\"\" /></td></tr>
    <tr><td>Registration_Date</td><td><input type=\"text\" name=\"Registration_Date\" value=\"\" /></td></tr>
    <tr><td>ZipCode</td><td><input type=\"text\" name=\"ZipCode\" value=\"\" /></td></tr>
    <tr><td>Country</td><td><input type=\"text\" name=\"Country\" value=\"\" /></td></tr>
     <tr><td>City</td><td><input type=\"text\" name=\"City\" value=\"\" /></td></tr>
    <tr><td>Street</td><td><input type=\"text\" name=\"Street\" value=\"\" /></td></tr>
    <tr><td ></td><td><input type=\"submit\" name=\"btn\" value=\"save\" /></td></tr>
</table>
</form>




</div>


<div id=\"Footer\"> Stefan Dzalev  </div>


</body>
<script src=\"".$settings['website_url']."administration/js/validationMember.js\"></script>

</html>
";
?>
