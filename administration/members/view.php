<?php




echo "

<script>

function delete_member(id)
{

    var val=confirm(\"Dali sakate da go izbrisite clenot\");

        if(val==true){
                window.location.href=\"?page=members&action=delete_exe&id=\"+id
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
                         <a href=\"".$settings['website_url']."administration?page=members&action=insert\" class=\"btn btn-success pull-right\" id=\"menu-toggle\">New Member</a>
                   
                    
                    <div class=\"table - responsive\">
                            <form action=\"?page=members&action=multi_delete\" method=\"post\">
                                <table class=\"table table - bordered table - hover table - striped\">
                                    <thead>
                                        <th>Firstname</th>
                                                <th>Lastname</th>
                                                  <th>Email</th>
                                                    <th>Tell number</th>
                                                      <th>Date of Birth</th>
                                                        <th>Registration Date</th>
                                                          <th>ZipCode</th>
                                                            <th>Country</th>
                                                             <th>City</th>
                                                              <th>Street</th>
                                                               <th>Edit</th>
                                                                <th>Delete</th>
                                                                 <th>Multi Delete</th>
                                          </tr>
                                    </thead>";

$sql="SELECT * FROM members";
$result=$connection->query($sql);


while ($row=$result->fetch_object()){
	$memberName=$row->member_firstname;
	$memberLastName=$row->member_lastname;
	$memberemail=$row->email;
	$memberTell_number=$row->tell_number;
	$memberDOB=$row->DOB;
	$memberReg_Date=$row->Registration_Date;
	$memberZipcode=$row->ZipCode;
	$memberCountry=$row->Country;
	$memberCity=$row->City;
	$memberStreet=$row->Street;
	$member_id=$row->member_id;
	$bgcolor="yellow";
	if($member_id==$_GET['id']) $bgcolor="blue";

	echo"<tr>
        <td>$memberName</td> <td>$memberLastName</td> <td>$memberemail</td> <td>$memberTell_number</td> <td>$memberDOB</td>
         <td>$memberReg_Date</td> <td>$memberZipcode</td> <td>$memberCountry</td> <td>$memberCity</td> <td>$memberStreet</td>
  <td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/?page=members&action=edit&id=$member_id\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>";

	if($memberDOB!=$_SESSION['user_name']) echo "    			<td style=\"text-align:center\"><a onclick=\"return delete_member($member_id)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>";
	if($memberDOB==$_SESSION['user_name']) echo "  <td> </td> ";
	if($memberDOB!=$_SESSION['user_name']) echo "<td><input type=\"checkbox\" name=\"delete[]\" value=\"$member_id\" ></td>";
	if($memberDOB==$_SESSION['user_name']) echo "<td></td>";
	echo " </tr>";

}

echo "
                                    </tbody>
                                      <tr><td colspan=\"12\"></td><td>  <input type=\"submit\" name=\"btn_delete\" value=\"delete all\" class=\"btn-danger\" /></td></tr>

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






