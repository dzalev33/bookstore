<?php


echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
<script >
function delete_Borrowed(id) {

    var val=confirm(\"dali sakate da go izbrisite zapisot od bazata?\");
        
        if (val==true){
           window.location.href=\"delete_exe.php?id= \"+id
        
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
//require_once '../includes/menu_administration.php';
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
                         <a href=\"".$settings['website_url']."administration/borrowed_by/insert.php\" class=\"btn btn-success pull-right\" id=\"menu-toggle\">New Borrow</a>
                   
                    
                    <div class=\"table - responsive\">
                            <form action=\"multi_delete . php\" method=\"post\">
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
               	 <td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/borrowed_by/edit.php?id=$borrowed_by_id\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>
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






