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
</div>
";
require_once '../includes/menu_administration.php';

echo "


  
</div>
<div id=\"Content\">
<form name=\"myForm\" action=\"edit_exe.php\" method=\"post\" onsubmit=\"return validationAuthorBook()\">
<table border=\"1\">";


              $sql="SELECT * 
FROM  author_book
INNER JOIN author ON author.`author_id` = author_book.`author_id` 
INNER JOIN book ON book.`book_id` = author_book.`book_id`
WHERE author_book.author_book_id=".$_GET['id'];
			$result=$connection->query($sql);
			
			while ($row=$result->fetch_object()){
				$authorBook_id=$row->author_book_id;
				$authorId=$row->author_id;
				$bookId=$row->book_id;
				//author
				$firstName=$row->firstname;
				$lastName=$row->lastname;
				//book
				$title=$row->Title;
				$price=$row->Price;

				echo "
				
			
				<tr>
				<td>author</td><td>$firstName $lastName </td>
				</tr>
				<tr>
				 <td>book</td><td>$title</td>
				</tr>
				
				<tr>
				<tr>
   			<td>price</td>
   			<td>
   			
   			$price
   			
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
<script src=\"".$settings['website_url']."administration/js/validationAuthorBook.js\"></script>
</html>
";
?>

?>