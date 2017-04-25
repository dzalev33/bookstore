<?php


echo "

<script >
function deletePayment(id) {

		var val=confirm(\"dali sakate da ja ponistite uplatata?\");
			if(val==true){
				window.location.href=\"?page=payment&action=delete_exe&id=\"+id
			}else {
				return false;
			}
			

  
}




</script>



    <!-- Page content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                
                    
                     <a href=\"#\" class=\"btn btn-success\" id=\"menu-toggle\">Menu</a>
                         <a href=\"".$settings['website_url']."administration?page=payment&action=insert\" class=\"btn btn-success pull-right\" id=\"menu-toggle\"> New Payment</a>
                   
                    
                    <div class=\"table - responsive\">
                            <form action=\"\" method=\"post\">
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
  <td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/?page=payment&action=edit&id=$paymentID\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>
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



";
?>






