<?php

session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
	header("Location:".$settings['website_url']."administration/index.php");
}


echo "
<!DOCTYPE html>
<html lang=\"en\">
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

<title>".$settings['title']."</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
    <link href=\"".$settings['website_url']."administration/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
                    <!--sidebar menu -->
    <link rel=\"stylesheet\" href=\"../css/sidebar.css\">
</head>
<body>

<div id=\"wrapper\">

    <!-- Sidebar -->
    <div id=\"sidebar-wrapper\">

        <ul class=\"sidebar-nav\">";
//menu list connect
require_once '../includes/menu_administration.php';
echo "
       <!--insert administrators-->
           
           
        </ul>
    </div>";

$message="";
if(!isset($_GET['id']))$_GET['id']="";
if(isset($_GET['message']) && $_GET['message']=='insert')$message=" Uspesno vnesovte nov zapis";
if(isset($_GET['message']) && $_GET['message']=='delete')$message=" Uspesno izbrisavte zapis";
if(isset($_GET['message']) && $_GET['message']=='update')$message=" Uspesno editiravte zapis";


echo "



    <!-- Page content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                
                    
                     <a href=\"#\" class=\"btn btn-success\" id=\"menu-toggle\">Menu</a>
                         <a href=\"".$settings['website_url']."administration/payment/insert.php\" class=\"btn btn-success pull-right\" id=\"menu-toggle\"> New Payment</a>
                   
                    
                    <div class=\"table - responsive\">
                            <form action=\"multi_delete . php\" method=\"post\">
                                <table class=\"table table - bordered table - hover table - striped\">
                                    <thead>
                                         <th>CardHolder Surname</th>
                                                <th>Card Number</th>
                                                  
                                              
                                                              <th>Card Expiary Date</th>
                                                               <th>card_type</th>
                                                               <th>security_code</th>
                                                               <th>Quantity</th>
                                                               <th>Total Price</th>
                                                               <th>Edit</th>
                                                                <th>Delete</th>
                                          </tr>
                                    </thead>";



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
                                    </tbody>

                                </table>
                              </form>
                    </div>
                    
                    
                    
                    
                    
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Menu toggle script -->
<script>
    $(\"#menu-toggle\").click( function (e){
        e.preventDefault();
        $(\"#wrapper\").toggleClass(\"menuDisplayed\");
    });
</script>

</body>
</html>






";
?>






