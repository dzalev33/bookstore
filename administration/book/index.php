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

<script >
function delete_BOOK(id) {

    var val=confirm(\"dali sakate da ja izbrisite knigata od bazata?\");
        
        if (val==true){
           window.location.href=\"delete_exe.php?id= \"+id
        
        }else {
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
<li><a href=\"".$settings['website_url']."administration/book/insert.php\">Insert new book</a></li>
 
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
    <table border=\"1\" align='center' width='100%'>
				
		
    
           <tr><td>Slika</td><td>Title</td> <td>Price</td> <td>Language</td><td>Stock</td><td>category</td><td>Description</td><td style=\"text-align:center\">edit</td><td style=\"text-align:center\">delete</td><td>multi Delete</td></tr>";

				$sql="SELECT * FROM book
				INNER JOIN category ON category.`category_id` = book.`category_id`";
				$result=$connection->query($sql);
				
    while ($row=$result->fetch_object()){
                  $BookTitle=$row->Title;
                  $bookPrice=$row->Price;
                  $BookLanguage=$row->Language;
                  $bookStock=$row->Stock;
                  $BookVategoryId=$row->category_id;
                  $booktype=$row->type;
                  $bookId=$row->book_id;
                  $Photo=$row->img_path;
                    $description=$row->	description;
                    $bgcolor="yellow";
                    if($type==$_GET['id']) $bgcolor="blue";
        
                 //"upload/"
        $img_path=$settings['website_url']."upload/".$Photo;

        echo " <tr><td><img src=\"$img_path\" width=\"40\" alt=\"$Photo\"></td><td>$BookTitle</td> <td>$bookPrice</td> <td>$BookLanguage</td><td>$bookStock</td><td>$booktype</td><td>$description</td>
   <td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/book/edit.php?id=$bookId\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>";


   		if($user!=$_SESSION['user_name']) echo "	<td style=\"text-align:center\"><a onclick=\" return delete_BOOK($bookId)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>";
        if($user==$_SESSION['user_name']) echo "  <td> </td> ";
        if($user!=$_SESSION['user_name']) echo "<td><input type=\"checkbox\" name=\"delete[]\" value=\"$bookId\" ></td>";
        if($user==$_SESSION['user_name']) echo "<td></td>";

        echo " </tr>";
}


   echo "
                               <tr><td colspan=\"9\"></td><td>  <input type=\"submit\" name=\"btn_delete\" value=\"delete all\" /></td></tr>

</table>


</div>


<div id=\"Footer\"> Stefan Dzalev  </div>


</body>

</html>"; ?>
