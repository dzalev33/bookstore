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
<title>Online Library</title>
</head>
<body>

<div id=\"Header\">

<ul class=\"topnav\" id=\"myTopnav\">
<li>
 
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
<div id=\"Content\">



<form name=\"myForm\" enctype=\"multipart/form-data\" action=\"insert_exe.php\" method=\"post\" onsubmit=\"return validationBook()\">
<table border=\"1\" style=\"border: black\" align=\"center\">
	
	 
               <tr><td><input type=\"hidden\" name=\"action\" value=\"image\" /></td><td><input type=\"file\" name=\"my_field\" /></td></tr>
	     
    <tr><td>Book Title</td><td><input type=\"text\" name=\"Title\" value=\"\" /></td></tr>
    <tr><td>Price</td><td><input type=\"text\" name=\"Price\" value=\"\" /></td></tr>
    <tr><td>Language</td><td><input type=\"text\" name=\"Language\" value=\"\" /></td></tr>
    <tr><td>Stock</td><td><input type=\"text\" name=\"Stock\" value=\"\"  /></td></tr>
             <tr><td>category</td><td>
             <select name=\"category_id\" >";


$sql_category="SELECT * FROM category";
$result_category=$connection->query($sql_category);

             while ($row_category=$result_category->fetch_object()){
                    $type=$row_category->type;
                         $categoryID=$row_category->category_id;

                                 echo "


            <option value=\"$categoryID\" style=\"align-self: center\" > $type</option>";


    

    }
        echo "

    </select>
</td></tr>
    <tr><td ></td><td><input type=\"submit\" name=\"btn\" value=\"save\" /></td></tr>
</table>
</form>

</div>


<div id=\"Footer\"> Stefan Dzalev  </div>


</body>
<script src=\"".$settings['website_url']."administration/js/validationBook.js\"></script>
</html>
";
?>
