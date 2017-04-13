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
function deletePayment(id) {

		var val=confirm(\"dali sakate da ja ponistite uplatata?\");
			if(val==true){
				window.location.href=\"delete_exe.php?id=\"+id
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

<link href=\"".$settings['website_url']."administration/css/style.css\" rel=\"stylesheet\" type=\"text/css\">>
<meta name=\"viewport\" content=\"width=device-width\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
<title>".$settings['title']."</title>
</head>
<body>

<div id=\"Header\">

<ul class=\"topnav\" id=\"myTopnav\">
<li><a href=\"".$settings['website_url']."administration/payment/insert.php\" >New payment</a></li> 	>
 
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
<table border=\"1\" style=\"border: black\" align=\"center\">


    <tr>
         <td>card_holder_Surname</td> <td>card_number</td> <td>card_expiary_date</td>
        <td>card_type</td> <td>security_code</td> <td>Quantity</td><td>Total Price</td> <td>Edit</td> <td>Delete</td>
    </tr>";
   
$sql="SELECT * FROM payment
 `payment` INNER JOIN
bucket ON payment.`order_id` = bucket.`order_id`";
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
         <td>$cardSurname</td> <td>$cardNumber</td> <td>$expDate</td> <td>$cardType</td> <td>$SecurityCode</td> <td>$quantity</td><td>$Total_Price</td>
  <td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/payment/edit.php?id=$paymentID\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>
   			<td style=\"text-align:center\"><a onclick=\"return deletePayment($paymentID)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>
 </tr>";
    
		}
echo"

</table>


</div>


<div id=\"Footer\"> Stefan Dzalev  </div>


</body>

</html>
";
?>
