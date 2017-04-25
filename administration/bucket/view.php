<?php



echo "

<script>

function delete_ad(id)
{

    var val=confirm(\"Dali sakate da ja izbrisite narackata\");

        if(val==true){
                window.location.href=\"?page=bucket&action=delete_exe&id=\"+id
        }else{
                return false;
        }//end if
}//end function
</script>



    <!-- Page content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                
                    
                     <a href=\"#\" class=\"btn btn-success\" id=\"menu-toggle\">Menu</a>
                         <a href=\"".$settings['website_url']."administration/?page=bucket&action=insert\" class=\"btn btn-success pull-right\" id=\"menu-toggle\">New Bucket</a>
                   
                    
                    <div class=\"table - responsive\">
                            <form action=\"\" method=\"post\">
                                <table class=\"table table - bordered table - hover table - striped\">
                                    <thead>
                                        <tr>
                                            <th>Quantity</th>
                                            <th>Total_Price</th>
                                       
                                            <th>Edit</th>
                                            <th>Delete</th>
                                          </tr>
                                    </thead>";
$sql="SELECT * FROM bucket";
$result=$connection->query($sql);

while ($row=$result->fetch_object()){

	$quantity=$row->Quantity;
	$TotalPrice=$row->Total_Price;
	$orderId=$row->order_id;

	echo "<tr> <td>$quantity</td> <td>$TotalPrice</td>
				<td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/?page=bucket&action=edit&id=$orderId\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>
   			<td style=\"text-align:center\"><a onclick=\"return delete_ad($orderId)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>
 </tr>";

}

echo "
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






