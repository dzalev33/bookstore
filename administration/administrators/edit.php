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

<form name=\"myForm\" action=\"edit_exe.php\" method=\"post\" onsubmit=\"return validationAdmin()\">
<table border=\"1\" style=\"border: black\" align=\"center\" width=\"100%\" >";
    
    $sql="SELECT * FROM administrators WHERE admin_id=".$_GET['id'];
    
   $result=$connection->query($sql);
    while($row=$result->fetch_object()){
    	$user=$row->user_name;
    	$position=$row->position;
    	$pass=$row->password;
    	$firsName=$row->first_name;
    	$lastName=$row->last_name;
    	$admin_id=$row->admin_id;
   echo "
   			<tr>	
   			<th>Pozicija</th><td>$position</td>
   			</tr>
   			<tr>
   			<th>Username</th><td>$user</td>
   			</tr>
   		
   			</tr>
   			<th>First name</th><td>$firsName</td>
   			</tr>
   			<tr>
   			<th>Last name</th>
   			<td>
   			<input type=\"hidden\" name=\"id\" value=\"$admin_id\" >
   			<input type=\"text\" name=\"last_name\" value=\"$lastName\" >
   			</td>
   		</tr>";

    }
    
echo " 
           

<tr ><td><input type=\"submit\" name=\"btn\" value=\"EDIT\" /></td></tr>
</table>
</form>
</div>


<div id=\"Footer\"> Stefan Dzalev  </div>


</body>

<script src=\"".$settings['website_url']."administration/js/validationAdministrators.js\"></script>
</html>
";
?>