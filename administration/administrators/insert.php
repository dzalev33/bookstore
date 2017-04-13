<?php
session_start();

require_once '../includes/settings.php';


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
<form name=\"myForm\" action=\"insert_exe.php\" method=\"post\" onsubmit=\"return validationAdmin()\">
<table border=\"1\" style=\"border: black\" align=\"center\">

    <tr><td>Position</td><td><input type=\"text\" name=\"position\" value=\"\" /></td></tr>
    
    
    <tr><td>Username</td><td><input type=\"text\" name=\"user_name\" value=\"\" /></td></tr>
    
    <tr><td>Password</td><td><input type=\"password\" name=\"password\" value=\"\" /></td></tr>
    
    <tr><td>first name</td><td><input type=\"text\" name=\"first_name\" value=\"\" /></td></tr>
    
    <tr><td>last name</td><td><input type=\"text\" name=\"last_name\" value=\"\" /></td></tr>
    <tr><td ></td><td><input type=\"submit\" name=\"btn\" value=\"save\" /></td></tr>
</table>
</form>
</div>


<div id=\"Footer\"> Stefan Dzalev  </div>


</body>
<script src=\"".$settings['website_url']."administration/js/validationAdministrators.js\"></script>
</html>
";
?>