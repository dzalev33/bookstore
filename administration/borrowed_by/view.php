<?php


echo "
<script >
function delete_Borrowed(id) {

    var val=confirm(\"dali sakate da go izbrisite zapisot od bazata?\");
        
        if (val==true){
           window.location.href=\"?page=borrowed_by&action=delete_exe&id= \"+id
        
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
                         <a href=\"".$settings['website_url']."administration?page=borrowed_by&action=insert\" class=\"btn btn-success pull-right\" id=\"menu-toggle\">New Borrow</a>
                   
                    
                    <div class=\"table - responsive\">
                            <form action=\"\" method=\"post\">
                                <table class=\"table table - bordered table - hover table - striped\">
                                    <thead>
                                        <tr>
                                            <th>Member</th>
                                            <th>Book</th>
                                    
                                            <th>Due Date</th>
                                            <th>Return Date</th>
                                      
                                            <th>Edit</th>
                                            <th>Delete</th>
                                          </tr>
                                    </thead>";
$sql="SELECT * FROM borrowed_by
              				 INNER JOIN book ON book.`book_id` = borrowed_by.`book_id` 
												INNER JOIN members ON members.`member_id` = borrowed_by.`member_id`";
$result=$connection->query($sql);

while ($row=$result->fetch_object()){
    $dueDate=$row->Due_Date;
    $returnDate=$row->Return_Date;
    $memberName=$row->member_firstname;
    $memberLastName=$row->member_lastname;
    $BookTitle=$row->Title;
    $borrowed_by_id=$row->borrowed_by_id;

    echo "<tr><td>$memberName $memberLastName </td><td>$BookTitle</td><td>$dueDate</td> <td>$returnDate</td>
               	 <td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/?page=borrowed_by&action=edit&id=$borrowed_by_id\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>
   			<td style=\"text-align:center\"><a onclick=\"return delete_Borrowed($borrowed_by_id)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>
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






