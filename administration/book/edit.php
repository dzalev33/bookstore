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
   <li><a href = \"AdminPage.html\">Admin</a></li>
  <li><a href=\"Login.html\">Login</a></li>
 
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
<form name=\"myForm\" action=\"edit_exe.php\" method=\"post\" onsubmit=\"return validationBook()\">
<table border=\"1\">
				
		
    
            ";

				$sql="SELECT * FROM book
				INNER JOIN category ON category.`category_id` = book.`category_id`
				 WHERE book.book_id=".$_GET['id'];
				
				$result=$connection->query($sql);
				
    while ($row=$result->fetch_object()){
    				$bookId=$row->book_id;
                  $BookTitle=$row->Title;
                  $bookPrice=$row->Price;
                  $BookLanguage=$row->Language;
                  $bookStock=$row->Stock;
                  $BookcategoryId=$row->category_id;
                  $booktype=$row->type;
                    $description=$row->description;
                  
               echo " 
                 <tr>
               	  <td>Title</td><td><input type=\"text\" name=\"Title\" value=\"$BookTitle\" /></td>
               	</tr>
               	 <tr>
               	  <td>Price</td><td><input type=\"text\" name=\"Price\" value=\"$bookPrice\" /></td>
               	</tr>
               	<tr>
               <td>Language</td> <td><input type=\"text\" name=\" Language\" value=\"$BookLanguage\" /></td>
                </tr>
                <tr>
                <input type=\"hidden\" name=\"id\" value=\"$bookId\" />
               <td>Stock</td> <td><input type=\"text\" name=\"Stock\" value=\"$bookStock\" /></td>
                </tr>
             
                   <tr> <td>Description</td><td><input type=\"text\" name=\"Title\" value=\"$description\" /></td>	</tr>
                <tr><td>category</td><td>
                
 
 <select  name=\"category_id\" >";

        $sql_categoryType="SELECT * FROM category";
        $result_categoryType=$connection->query($sql_categoryType);

             while ($row_categoryType=$result_categoryType->fetch_object()){

                     $selected="";//deklaracija i inicijalizacija

                     //table category
                     $type=$row_categoryType->type;
                     $categoryID=$row_categoryType->category_id;

                     //compare PK==FK
                     if($categoryID==$BookcategoryId){$selected="selected";}
                     if($categoryID!=$BookcategoryId){$selected="";}
                     echo "<option value=\"$categoryID\" $selected>$type</option> ";

             }


    }

    echo "

 </select>

   			
                

        


  
   <tr ><td><input type=\"submit\" name=\"btn\" value=\"EDIT\" /></td></tr>
</table>
</form>

</div>


<div id=\"Footer\"> Stefan Dzalev  </div>


</body>
<script src=\"".$settings['website_url']."administration/js/validationBook.js\"></script>
</html>
";
?>
