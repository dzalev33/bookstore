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
<form name=\"MyForm\" action=\"insert_exe.php\" method=\"post\" onsubmit=\"return validationOrder_book()\">
<table border=\"1\" style=\"border: black\" align=\"center\">


<tr><td>Book</td><td>
		        		<select name=\"book_id\">";


//databese connect for book table
$sql_book = "SELECT * FROM book";
			  					$result_book = $connection->query($sql_book);

					//while for displaying category with selection
						while ($row_book = $result_book->fetch_object()) {
                            $bookID = $row_book->book_id;
                            $bookTitle = $row_book->Title;


                            echo " <option value=\"$bookID \" >$bookTitle</option>";


						} //End while for category




					echo "
	    			 </select>
	  				 </td>
					 </tr>
    
    
    
    
<tr><td>Quantity</td><td>
		        		<select name=\"order_id\">";


//databese connect for book table
$sql_Quantity = "SELECT * FROM bucket";
			  					$result_Quantity = $connection->query($sql_Quantity);

					//while for displaying category with selection
						while ($row_Quantity = $result_Quantity->fetch_object()) {

                            $orderID=$row_Quantity->order_id;
                            $quantity = $row_Quantity->Quantity;




                            echo " <option value=\"$orderID \" >$quantity </option>";


						} //End while for category




					echo "
	    			 </select>
	  				 </td>
					 </tr>
    
    
    
                    
<tr><td>Total Price</td><td>
		        		<select name=\"order_id\">";


//databese connect for book table
$sql_TotalPrice = "SELECT * FROM bucket";
			  					$result_TotalPrice = $connection->query($sql_TotalPrice);

					//while for displaying category with selection
						while ($row_TotalPrice = $result_TotalPrice->fetch_object()) {

                            $orderID=$row_TotalPrice->order_id;
                            $TotalPrice = $row_TotalPrice->Total_Price;




                            echo " <option value=\"$orderID \" >$TotalPrice </option>";


						} //End while for category




					echo "
	    			 </select>
	  				 </td>
					 </tr>
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
        <tr><td ></td><td><input type=\"submit\" name=\"btn\" value=\"save\" /></td></tr>
    
    
    
    
    
    
    
</table>
</form>



</div>


<div id=\"Footer\"> Stefan Dzalev  </div>


</body>
<script src=\"".$settings['website_url']."administration/js/validationOrder_book.js\"></script>

</html>
";
?>

