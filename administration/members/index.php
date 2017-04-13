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
<script>

function delete_member(id)
{

    var val=confirm(\"Dali sakate da go izbrisite clenot\");

        if(val==true){
                window.location.href=\"delete_exe.php?id=\"+id
        }else{
                return false;
        }//end if
}//end function
</script>
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
<li><a href=\"".$settings['website_url']."administration/members/insert.php\">Insert new member</a></li>
 
</ul>





</div>
<div id=\"Left\" >
<div>
<img src=\"".$settings['website_url']."administration/img/kniga_logo.jpg\"align=\"top\" id=\"Logo\">
</div>";
require_once '../includes/menu_administration.php';
$message="";
if(!isset($_GET['id']))$_GET['id']="";
if(isset($_GET['message']) && $_GET['message']=='insert')$message=" Uspesno vnesovte nov zapis";
if(isset($_GET['message']) && $_GET['message']=='delete')$message=" Uspesno izbrisavte zapis";
if(isset($_GET['message']) && $_GET['message']=='update')$message=" Uspesno editiravte zapis";
echo "
  

  
</div>
<div id=\"Content\">
<form action=\"multi_delete.php\" method=\"post\">
<table border=\"1\"  align='center'  >

    <tr>
        <td>member_firstname</td> <td>member_lastname</td> <td>email</td>
        <td>tell_number</td> <td>DOB</td> <td>Registration_Date</td> <td>ZipCode</td> <td>Country</td> <td>City</td> <td>Street</td>
    <td style=\"text-align:center\">edit</td><td style=\"text-align:center\">delete</td><td>multi Delete</td></tr>";
         
$sql="SELECT * FROM members";
		$result=$connection->query($sql);
		
		
		while ($row=$result->fetch_object()){	
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
			$member_id=$row->member_id;
			$bgcolor="yellow";
			if($type==$_GET['id']) $bgcolor="blue";

			echo"<tr>
        <td>$memberName</td> <td>$memberLastName</td> <td>$memberemail</td> <td>$memberTell_number</td> <td>$memberDOB</td>
         <td>$memberReg_Date</td> <td>$memberZipcode</td> <td>$memberCountry</td> <td>$memberCity</td> <td>$memberStreet</td>
  <td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/members/edit.php?id=$member_id\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>";

		 if($user!=$_SESSION['user_name']) echo "    			<td style=\"text-align:center\"><a onclick=\"return delete_member($member_id)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>";
        if($user==$_SESSION['user_name']) echo "  <td> </td> ";
        if($user!=$_SESSION['user_name']) echo "<td><input type=\"checkbox\" name=\"delete[]\" value=\"$member_id\" ></td>";
        if($user==$_SESSION['user_name']) echo "<td></td>";
   echo " </tr>";
			
		}

echo "

    									
                                   <tr><td colspan=\"12\"></td><td>  <input type=\"submit\" name=\"btn_delete\" value=\"delete all\" /></td></tr>


</table>




</div>


<div id=\"Footer\"> Stefan Dzalev  </div>


</body>

</html>
";
?>
