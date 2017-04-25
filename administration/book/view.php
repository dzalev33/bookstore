<?php





echo" 


<script >
function delete_BOOK(id) {

    var val=confirm(\"dali sakate da ja izbrisite knigata od bazata?\");
        
        if (val==true){
           window.location.href=\"?page=book&action=delete_exe&id= \"+id
        
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
                         <a href=\"".$settings['website_url']."administration?page=book&action=insert\" class=\"btn btn-success pull-right\" id=\"menu-toggle\">New Book</a>
                   
                    
                    <div class=\"table - responsive\">
                            <form action=\"?page=book&action=multi_delete\" method=\"post\">
                                <table class=\"table table - bordered table - hover table - striped\">
                                    <thead>
                                        <tr>
                                           <th>Picture</th>
                                            <th>Title</th>
                                            <th>Price</th>
                                            <th>Language</th>
                                            <th>Stock</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>multi Delete</th>
                                          </tr>
                                    </thead>";
$sql="SELECT * FROM book
				INNER JOIN category ON category.`category_id` = book.`category_id`";
$result=$connection->query($sql);

while ($row=$result->fetch_object()){
    $BookTitle=$row->Title;
    $bookPrice=$row->Price;
    $BookLanguage=$row->Language;
    $bookStock=$row->Stock;
    $BookVategoryId=$row->category_id;
    $booktype=$row->type;
    $bookId=$row->book_id;
    $Photo=$row->img_path;
    $description=$row->	description;
    $bgcolor="yellow";
    if($bookId==$_GET['id'])
        $bgcolor="blue";

    //"upload/"
    $img_path=$settings['website_url']."upload/".$Photo;

    echo " <tr><td><img src=\"$img_path\" width=\"40\" alt=\"$Photo\"></td><td>$BookTitle</td> <td>$bookPrice</td> <td>$BookLanguage</td><td>$bookStock</td><td>$booktype</td><td>$description</td>
   <td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/?page=book&action=edit&id=$bookId\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>";


    if($BookTitle!=$_SESSION['user_name']) echo "	<td style=\"text-align:center\"><a onclick=\" return delete_BOOK($bookId)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>";
    if($BookTitle==$_SESSION['user_name']) echo "  <td> </td> ";
    if($BookTitle!=$_SESSION['user_name']) echo "<td><input type=\"checkbox\" name=\"delete[]\" value=\"$bookId\" ></td>";
    if($BookTitle==$_SESSION['user_name']) echo "<td></td>";

    echo " </tr>";
}


echo "
                                    </tbody>
                                     <tr><td colspan=\"9\"></td><td>  <input type=\"submit\" name=\"btn_delete\" value=\"delete all\" class=\"btn-danger\" /></td></tr>
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






