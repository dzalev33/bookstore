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

<link href=\"".$settings['website_url']."administration/css/style.css\" rel=\"stylesheet\" type=\"text/css\">>
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
<form name=\"myForm\" action=\"edit_exe.php\" method=\"post\" onsubmit=\"return validationPayment()\">
<table border=\"1\" style=\"border: black\" align=\"center\">";
   
$sql="SELECT * FROM payment
 `payment` INNER JOIN
bucket ON payment.`order_id` = bucket.`order_id`
WHERE payment.payment_id=".$_GET['id'];
		$result=$connection->query($sql);
		
		
		while ($row=$result->fetch_object()){
	
	
			$cardSurname=$row->card_holder_Surname;
			$cardNumber=$row->card_number;
			$expDate=$row->card_expiary_date;
			$cardType=$row->card_type;
			$SecurityCode=$row->security_code;
			$orderId=$row->order_id;
			$paymentID=$row->payment_id;
    		$quantity=$row->Quantity;
    		$Total_Price=$row->Total_Price;
    
    echo" 
			 <tr>
         <td>cardholder Surname</td> <td><input type=\"text\" name=\"card_holder_Surname\" value=\"$cardSurname\" /></td>
          </tr>
          <tr>
          <td>card_number</td><td><input type=\"text\" name=\"card_number\" value=\"$cardNumber\" /></td>
           </tr>
           <tr>
           <td>card_expiary_date</td><td><input type=\"text\" name=\"card_expiary_date\" value=\"$expDate\" /></td>
           </tr>
           <tr>
        <td>card_type</td> <td><input type=\"text\" name=\"card_type\" value=\"$cardType\" /></td>
        </tr>
        <tr>
        <td>security_code</td><td><input type=\"text\" name=\"security_code\" value=\"$SecurityCode\" /></td>
        </tr>
        <tr>
        <td>Quantity</td> <td>Quantity</td>
        </tr>
        <tr>
        <input type=\"hidden\" name=\"id\" value=\"$paymentID\" />
        <td>Total Price</td> <td>$Total_Price</td>
    </tr>
 
";
    
		}
echo"
<tr ><td><input type=\"submit\" name=\"btn\" value=\"EDIT\" /></td></tr>
</table>

</form>
</div>


<div id=\"Footer\"> Stefan Dzalev  </div>


</body>
<script src=\"".$settings['website_url']."administration/js/validationPayment.js\"></script>
</html>
";
?>
