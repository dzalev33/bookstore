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
<form name=\"myForm\" action=\"edit_exe.php\" method=\"post\" onsubmit=\"return validationMember()\">
<table border=\"1\"  >";
         
$sql="SELECT * FROM members
WHERE members.member_id=".$_GET['id'];
		$result=$connection->query($sql);
		
		
		while ($row=$result->fetch_object()){
				$memberID=$row->member_id;
			$memberName=$row->member_firstname;
			$memberLastName=$row->member_lastname;
			$memberemail=$row->email;
			$memberTell_number=$row->tell_number;
			$memberDOB=$row->DOB;
			$memberReg_Date=$row->Registration_Date;
			$memberZipcode=$row->ZipCode;
			$memberCountry=$row->Country;
			$memberCity=$row->City;
			$memberStreet=$row->Street;
			
			echo"

			<tr>
        <td>member firstname</td><td><input  type=\"text\" name=\"member_firstname\" value=\"$memberName\" /></td>
        </tr>
         
         <tr>
         <td>member lastname</td> <td><input type=\"text\" name=\"member_lastname\" value=\"$memberLastName\" /></td>
          </tr>
          </<tr>
           <td>email</td><td><input type=\"text\" name=\"email\" value=\"$memberemail\" /></td>
          </tr>
          </tr>
          <td>tell number</td><td><input type=\"text\" name=\"tell_number\" value=\"$memberTell_number\" /></td>
           </tr>
           <tr>
           <td>Date of Birth</td><td><input type=\"text\" name=\"DOB\" value=\"$memberDOB\" /></td>
           </tr>
           <tr>
         <td>Registration Date</td><td><input type=\"text\" name=\"Registration_Date\" value=\"$memberReg_Date\" /></td>
          </tr>
          <tr>
          <td>ZipCode</td><td><input type=\"text\" name=\"ZipCode\" value=\"$memberZipcode\" /></td>
           </tr>
           <tr>
           <td>$memberCountry</td><td><input type=\"text\" name=\"Country\" value=\"$memberCountry\" /></td>
            </tr>
            <tr>
            <td>City</td><td><input type=\"text\" name=\"City\" value=\"$memberCity\" /></td>
             </tr>
             <tr>
             <input type=\"hidden\" name=\"id\" value=\"$memberID\" />
             <td>Street</td><td><input type=\"text\" name=\"Street\" value=\"$memberStreet\" /></td>
   			 </tr>";
			
		}

echo "
<tr ><td><input type=\"submit\" name=\"btn\" value=\"EDIT\" /></td></tr>
    									
    

</table>

</form>


</div>


<div id=\"Footer\"> Stefan Dzalev  </div>


</body>
<script src=\"".$settings['website_url']."administration/js/validationMember.js\"></script>
</html>
";
?>
