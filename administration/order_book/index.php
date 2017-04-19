<?php

session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
	header("Location:".$settings['website_url']."administration/index.php");
}


echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>



<script>

function delete_orderBook(id)
{

    var val=confirm(\"Dali sakate da ja izbrisite narackata na kniga?\");

        if(val==true){
                window.location.href=\"delete_exe.php?id=\"+id
        }else{
                return false;
        }//end if
}//end function
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
require_once '../includes/menu_administration.php';
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
                         <a href=\"".$settings['website_url']."administration/order_book/insert.php\" class=\"btn btn-success pull-right\" id=\"menu-toggle\">New Order</a>
                   
                    
                    <div class=\"table - responsive\">
                            <form action=\"multi_delete . php\" method=\"post\">
                                <table class=\"table table - bordered table - hover table - striped\">
                                    <thead>
                                        <th>Firstname</th>
                                                <th>Book Title</th>
                                                <th>Book Price</th>
                                                  <th>Total Price</th>
                                              
                                                              <th>Order ID</th>
                                                               <th>Edit</th>
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

	echo "<tr><td>$BookTitle</td><td>$bookPrice</td><td>$TotalPrice</td> <td>$orderId</td><td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/order_book/edit.php?id=$order_bookID	\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>
   			<td style=\"text-align:center\"><a onclick=\"return delete_orderBook($order_bookID)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>
 </tr>";
}

echo "
                                    </tbody>
  <tr><td colspan=\"6\"></td><td>  <input type=\"submit\" name=\"btn_delete\" value=\"delete all\" class=\"btn-danger\" /></td></tr>

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






