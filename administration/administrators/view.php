<?php
echo'
<script>
        function delete_ad(id){

        var val=confirm("Dali sakate da go izbrisite adminot?");

        if(val==true){
                window.location.href="?page=administrators&action=delete_exe&id="+id
        }else{
                return false;
            }//end if
        }//end function
</script>
';?>
    <!-- Page content -->
    <div id="page-content-wrapper">
    
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                     <a href="#" class="btn btn-success" id="menu-toggle">Menu</a>
                      <?php echo"   <a href=\"".$settings['website_url']."administration?page=administrators&action=insert\" class=\"btn btn-success pull-right\" id=\"menu-toggle\">New Admin</a>" ?>
                    <div class="table-responsive">
                            <form action="?page=administrators&action=multi_delete" method="post">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Position</th>
                                            <th>User Name</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>edit</th>
                                            <th>Delete</th>
                                            <th>multi delete</th>
                                          </tr>
                                    </thead>
                                    <?php
$sql="SELECT * FROM administrators";
$result=$connection->query($sql);
while($row=$result->fetch_object()) {
    $user = $row->user_name;
    $position = $row->position;
    $pass = $row->password;
    $firsName = $row->first_name;
    $lastName = $row->last_name;
    $admin_id = $row->admin_id;
    $bgcolor = "yellow";
    if ($admin_id == $_GET['id']) $bgcolor = "blue";
    echo "
                                    <tbody>
                                        <tr bgcolor=$bgcolor>
                                        <td>$position</td><td>$user</td><td>$firsName</td><td>$lastName</td>
                                        <td><a href=\"" . $settings['website_url'] . "administration?page=administrators&action=edit&id=$admin_id\" ><img src = \"" . $settings['website_url'] . "images/edit.png\" width = \"20\" alt = \"edit\" /></a ></td > ";

    if ($user != $_SESSION['user_name']) echo "<td><a onclick=\"return delete_ad($admin_id)\"><img src=\"" . $settings['website_url'] . "images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>";
    if ($user == $_SESSION['user_name']) echo "<td></td>";


    if ($user != $_SESSION['user_name']) echo "<td><input type=\"checkbox\" name=\"delete[]\" value=\"$admin_id\"  ></td>";
    if ($user == $_SESSION['user_name']) echo "<td></td>";
    echo " </tr>";

}//end of While
?>
                                    </tbody>
                                     <tr><td colspan="6"></td><td>  <input type="submit" name="btn_delete" value="delete all" class="btn-danger" /></td></tr>
                                </table> 
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
            <!--END PAGE -->
