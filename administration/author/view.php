<?php

echo"
<script>

function delete_author(authorID){
    
    var val=confirm(\"izbrisi go avtorot?\");
        
        if(val==true){
            window.location.href=\"?page=author&action=delete_exe&id=\"+authorID
        } else {
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
                         <a href=\"".$settings['website_url']."administration?page=author&action=insert\" class=\"btn btn-success pull-right\" id=\"menu-toggle\">New Author</a>
                   
                    
                    <div class=\"table - responsive\">
                            <form action=\"?page=author&action=multi_delete\" method=\"post\">
                                <table class=\"table table - bordered table - hover table - striped\">
                                    <thead>
                                        <tr>
                                            <th>Picture</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>multi delete</th>
                                          </tr>
                                    </thead>";
$sql="SELECT * FROM author";
$result=$connection->query($sql);

while ($row=$result->fetch_object()){
  

    $authorName=$row->firstname;
    $authorLastname=$row->lastname;
    $author_id=$row->author_id;
    $Photo=$row->img_author;
    $bgcolor="yellow";
    if($author_id==$_GET['id']) $bgcolor="blue";
    //"upload/"

    $img_path=$settings['website_url']."upload/".$Photo;

    echo "<tr><td><img src=\"$img_path\" width=\"40\" alt=\"$Photo\"></td><td>$authorName</td> <td>$authorLastname</td>
                         			<td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/?page=author&action=edit&id=$author_id\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>";
    //delete

    if($authorName!=$_SESSION['user_name']) 	echo "<td><a onclick=\"return delete_author($author_id)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>";
    if($authorName==$_SESSION['user_name']) 	echo "<td></td>";

    //multi delete
    if($authorName!=$_SESSION['user_name']) echo "<td><input type=\"checkbox\" name=\"delete[]\" value=\"$author_id\" ></td>";
    if($authorName==$_SESSION['user_name']) echo "<td></td>";


    echo "         </tr>";


}//end of While
echo "
                                    </tbody>
                                     <tr><td colspan=\"5\"></td><td>  <input type=\"submit\" name=\"btn_delete\" value=\"delete all\" class=\"btn-danger\" /></td></tr>
                                </table>
                              </form>
                    
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
                <!--END PAGE -->
";


?>






