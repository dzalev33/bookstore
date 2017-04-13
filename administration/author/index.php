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

function delete_author(authorID){
    
    var val=confirm(\"izbrisi go avtorot?\");
        
        if(val==true){
            window.location.href=\"delete_exe.php?id=\"+authorID
        } else {
            return false;
            
            
               }

        }




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
<li><a href=\"index . php?lang = mkd\">MKD</a></li>
<li><a href=\"index . php?lang = en\">EN</a></li>";
require_once '../../_prep.php';
echo "

<li><a href = \"".$settings['website_url']."administration/author/insert.php\">Insert new author</a>  </li>
 
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
   			<table border=\"1\" width=\"100%\">
   
   			     <tr><td>Slika</td><td>firstname</td> <td>lastname</td><td style=\"text-align:center\">edit</td><td style=\"text-align:center\">delete</td><td>multi delete</td></tr>";
         

 				$sql="SELECT * FROM author";
                $result=$connection->query($sql);
                
                while ($row=$result->fetch_object()){
                      $authorName=$row->firstname;
                      $authorLastname=$row->lastname;
                      $author_id=$row->author_id;
                      $Photo=$row->img_path;
                    $bgcolor="yellow";
                    if($type==$_GET['id']) $bgcolor="blue";
                    //"upload/"
                    
                      $img_path=$settings['website_url']."upload/".$Photo;
                      	
                       echo "<tr><td><img src=\"$img_path\" width=\"40\" alt=\"$Photo\"></td><td>$authorName</td> <td>$authorLastname</td>
                         			<td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/author/edit.php?id=$author_id\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>";
                    //delete

                    if($user!=$_SESSION['user_name']) 	echo "<td><a onclick=\"return delete_author($author_id)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>";
                    if($user==$_SESSION['user_name']) 	echo "<td></td>";

                    //multi delete
                    if($user!=$_SESSION['user_name']) echo "<td><input type=\"checkbox\" name=\"delete[]\" value=\"$author_id\" ></td>";
                    if($user==$_SESSION['user_name']) echo "<td></td>";


          echo "         </tr>";
                	
                }
   			    
   			     
        		echo "		
   			      	 <tr><td colspan=\"5\"></td><td>  <input type=\"submit\" name=\"btn_delete\" value=\"delete all\" /></td></tr>

	        </table>				
        </div>
    <div id=\"Footer\"> Stefan Dzalev  </div>
</body>

</html>"; ?>