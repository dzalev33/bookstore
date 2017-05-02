<?php


echo "

<script>

function delete_orderBook(id)
{

    var val=confirm(\"Dali sakate da ja izbrisite narackata na kniga?\");

        if(val==true){
                window.location.href=\"?page=order_book&action=delete_exe&id=\"+id
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
                         <a href=\"".$settings['website_url']."administration/?page=order_book&action=insert\" class=\"btn btn-success pull-right\" id=\"menu-toggle\">New Order</a>
                   
                    
                    <div class=\"table - responsive\">
                            <form action=\"\" method=\"post\">
                                <table class=\"table table - bordered table - hover table - striped\">
                                    <thead>
                                        
                                                <th>Book Title</th>
                                                <th>Book Price</th>
                                                  <th>Total Price</th>
                                              
                                                              <th>Order ID</th>
                                                               
                                                                <th>Delete</th>
                                          </tr>
                                    </thead>";


$sql= "SELECT * FROM `order_book`
INNER JOIN book ON book.`book_id` = order_book.`book_id` 
INNER JOIN bucket ON bucket.`order_id` = order_book.`order_id`";
$result=$connection->query($sql);


while ($row=$result->fetch_object()){
	$bookId=$row->book_id;
	$orderId=$row->order_id;
	$order_bookID=$row->order_book_id;
	$BookTitle=$row->Title;
	$bookPrice=$row->Price;
	$TotalPrice=$row->Total_Price;

	echo "<tr><td>$BookTitle</td><td>$bookPrice</td><td>$TotalPrice</td> <td>$orderId</td>
   			<td style=\"text-align:center\"><a onclick=\"return delete_orderBook($order_bookID)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>
 </tr>";
}

echo "
                                    </tbody>
  <tr><td colspan=\"4\"></td><td>  <input type=\"submit\" name=\"btn_delete\" value=\"delete all\" class=\"btn-danger btn-block\" /></td></tr>

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






