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
<table border=\"1\" style=\"border: black\" align=\"center\" >
	
    <tr> <td>book Title</td> <td>Book Price</td><td>Total Price</td></tr>";

$sql= "SELECT * FROM `order_book`
INNER JOIN book ON book.`book_id` = order_book.`book_id` 
INNER JOIN bucket ON bucket.`order_id` = order_book.`order_id`
WHERE order_book.order_book_id=".$_GET['id'];
		$result=$connection->query($sql);
		
		
		while ($row=$result->fetch_object()){
			$bookId=$row->book_id;
			$orderId=$row->order_id;
			$BookTitle=$row->Title;
			$bookPrice=$row->Price;
			$TotalPrice=$row->Total_Price;
			echo "<tr><td>$BookTitle</td><td>$bookPrice</td><td>$TotalPrice</td> </tr>";
		}

    echo "


</table>



</div>


<div id=\"Footer\"> Stefan Dzalev  </div>


</body>

</html>
";
?>

