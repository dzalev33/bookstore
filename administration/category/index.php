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

function delete_Category(id)
{

    var val=confirm(\"Dali sakate da ja izbrisite kategorijata\");

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
<li><a href=\"".$settings['website_url']."administration/category/insert.php\">Insert New Category</a></li>
 
</ul>





</div>
<div id=\"Left\" >
<div>
<img src=\"".$settings['website_url']."administration/img/kniga_logo.jpg\"align=\"top\" id=\"Logo\">
</div>
";
require_once '../includes/menu_administration.php';
echo "
  

  
</div>
<div id=\"Content\">";

$message="";
if(!isset($_GET['id']))$_GET['id']="";
if(isset($_GET['message']) && $_GET['message']=='insert')$message=" Uspesno vnesovte nov zapis";
if(isset($_GET['message']) && $_GET['message']=='delete')$message=" Uspesno izbrisavte zapis";
if(isset($_GET['message']) && $_GET['message']=='update')$message=" Uspesno editiravte zapis";

echo $message."
<table border=\"1\" align='center'>
				
		
    <tr>
        <td>type</td><td style=\"text-align:center\">edit</td><td style=\"text-align:center\">delete</td>
    </tr>";

		$sql="SELECT * FROM category ORDER BY type";
		$result=$connection->query($sql);
		
		
		while ($row=$result->fetch_object()){
			$bgcolor="yellow";
			$type=$row->type;
			$category_id=$row->category_id;
			
			if($type==$_GET['id']) $bgcolor="blue";

			echo "<tr bgcolor=$bgcolor>
      <td>$type</td> 
    <td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/category/edit.php?id=$category_id\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>
   			<td style=\"text-align:center\"><a onclick=\" return delete_Category ($category_id)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>
 </tr>";
			
			
			
		}
    
    echo "
    
    



</table>



</div>


<div id=\"Footer\"> Stefan Dzalev  </div>


</body>

</html>
";
?>

