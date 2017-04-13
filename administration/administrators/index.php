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

        function delete_ad(id){

        var val=confirm(\"Dali sakate da go izbrisite adminot?\");

        if(val==true){
                window.location.href=\"delete.php?id=\"+id
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
 <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
<link href=\"".$settings['website_url']."administration/css/style.css\" rel=\"stylesheet\" type=\"text/css\"> 

<meta name=\"viewport\" content=\"width=device-width\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
<title>".$settings['title']."</title>
</head>
<body>

    <div id=\"Header\">
        <ul class=\"topnav\" id=\"myTopnav\">
            <li><a href=\"index.php?lang=mkd\">MKD</a></li>
            <li><a href=\"index.php?lang=en\">EN</a></li>";
                require_once '../../_prep.php';
                echo "
               <li><a href=\"".$settings['website_url']."administration/administrators/insert.php\"> Insert new administrator</a></li>
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
<div id=\"Content\">".$message."
<form action=\"multi_delete.php\" method=\"post\">
<table border=\"1\" style=\"border: black\" align=\"center\" width=\"100%\" id='Table' bgcolor='#ff7f50'  >
<caption>Book Store Administrators</caption>
    <tr><th>position</th><th>user name</th><th>first name</th><th>last name</th><th>edit</th><th>".$lang_['delete']."</th><th>multi delete</th></tr>";

    $sql="SELECT * FROM administrators";

   $result=$connection->query($sql);
    while($row=$result->fetch_object()){
    	$user=$row->user_name;
    	$position=$row->position;
    	$pass=$row->password;
    	$firsName=$row->first_name;
    	$lastName=$row->last_name;
    	$admin_id=$row->admin_id;
        $bgcolor="yellow";
        if($admin_id==$_GET['id'])$bgcolor="blue";
   echo "<tr bgcolor=$bgcolor>
   			<td>$position</td><td>$user</td><td>$firsName</td><td>$lastName</td>
   			<td><a href=\"".$settings['website_url']."administration/administrators/edit.php?id=$admin_id\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>";


        if($user!=$_SESSION['user_name']) 	echo "<td><a onclick=\"return delete_ad($admin_id)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>";
        if($user==$_SESSION['user_name']) 	echo "<td></td>";


               		if($user!=$_SESSION['user_name']) echo "<td><input type=\"checkbox\" name=\"delete[]\" value=\"$admin_id\" ></td>";
                    if($user==$_SESSION['user_name']) echo "<td></td>";

        
        
   	echo   " </tr>";

    }
    
echo " 
 

               <tr><td colspan=\"6\"></td><td>  <input type=\"submit\" name=\"btn_delete\" value=\"delete all\" /></td></tr>



</table>
</form>

</div>


        <div id=\"Footer\"> Stefan Dzalev  </div>
    </body>
    <script src=\"js/jquery.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</html>"; ?>