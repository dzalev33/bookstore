<?php




echo "

<script>

function delete_Category(id)
{

    var val=confirm(\"Dali sakate da ja izbrisite kategorijata\");

        if(val==true){
                window.location.href=\"?page=category&action=delete_exe&id=\"+id
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
                         <a href=\"".$settings['website_url']."administration?page=category&action=insert\" class=\"btn btn-success pull-right\" id=\"menu-toggle\">New Category</a>
                   
                    
                    <div class=\"table - responsive\">
                            <form action=\"\" method=\"post\">
                                <table class=\"table table-bordered table-hover table-striped\">
                                    <thead>
                                        <tr>
                                           <th>Type</th>
                                  <th>Edit</th>
                                            <th>Delete</th>
                                          </tr>
                                    </thead>";
$sql="SELECT * FROM category ORDER BY type";
$result=$connection->query($sql);


while ($row=$result->fetch_object()){
	$bgcolor="yellow";
	$type=$row->type;
	$category_id=$row->category_id;

	if($type==$_GET['id']) $bgcolor="blue";

	echo "<tr bgcolor=$bgcolor>
      <td>$type</td> 
    <td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/?page=category&action=edit&id=$category_id\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>
   			<td style=\"text-align:center\"><a onclick=\" return delete_Category ($category_id)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>
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






