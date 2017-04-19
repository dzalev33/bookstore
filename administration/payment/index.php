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

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

   

    <!-- Bootstrap Core CSS -->
    <link href=\"../css/bootstrap.min.css\" rel=\"stylesheet\">

    <!-- Custom CSS -->
    <link href=\"../css/sb-admin.css\" rel=\"stylesheet\">

    <!-- Morris Charts CSS -->
    <link href=\"../css/plugins/morris.css\" rel=\"stylesheet\">

    <!-- Custom Fonts -->
    <link href=\"../font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
<title>".$settings['title']."</title>


<script >
function deletePayment(id) {

		var val=confirm(\"dali sakate da ja ponistite uplatata?\");
			if(val==true){
				window.location.href=\"delete_exe.php?id=\"+id
			}else {
				return false;
			}
			

  
}




</script>

</head>

<body>

<div id=\"wrapper\">

    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Admin Page</a>
        </div>
        <!-- Top Menu Items -->
        <ul class=\"nav navbar-right top-nav\">
            
           
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Settings <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    
                    <li>
                        <a href=\"".$settings['website_url']."administration/payment/insert.php\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> New Payment </a>
                    </li>
                    
                  
                    <li class=\"divider\"></li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
      
        <!-- /.navbar-collapse -->
    </nav>

    <div id=\"page-wrapper\">

        <div class=\"container-fluid\">

            <!-- Page Heading -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">
                        Payments <small>Admin Page</small>
                    </h1>

                </div>";
require_once '../includes/menu_administration.php';
$message="";
if(!isset($_GET['id']))$_GET['id']="";
if(isset($_GET['message']) && $_GET['message']=='insert')$message=" Uspesno vnesovte nov zapis";
if(isset($_GET['message']) && $_GET['message']=='delete')$message=" Uspesno izbrisavte zapis";
if(isset($_GET['message']) && $_GET['message']=='update')$message=" Uspesno editiravte zapis";


echo "




            <!-- CONTENT--->
            <div class=\"row\">".$message."

                
                   

                       <!-- <div class=\"panel-body\"> -->
                            <div class=\"table-responsive\">
                            <form action=\"multi_delete.php\" method=\"post\">
                                <table class=\"table table-bordered table-hover table-striped\">
                                    <thead>
                                        <tr>
                                              <th>CardHolder Surname</th>
                                                <th>Card Number</th>
                                                  
                                              
                                                              <th>Card Expiary Date</th>
                                                               <th>card_type</th>
                                                               <th>security_code</th>
                                                               <th>Quantity</th>
                                                               <th>Total Price</th>
                                                               <th>Edit</th>
                                                                <th>Delete</th>
                                                                
                                               
                                            
                                          </tr>
                                    </thead>";


$sql="SELECT * FROM payment
 `payment` INNER JOIN
bucket ON payment.`order_id` = bucket.`order_id`";
$result=$connection->query($sql);


while ($row=$result->fetch_object()){

	$cardSurname=$row->card_holder_Surname;
	$cardNumber=$row->card_number;
	$expDate=$row->card_expiary_date;
	$cardType=$row->card_type;
	$SecurityCode=$row->security_code;
	$orderId=$row->order_id;
	$paymentID=$row->payment_id;
	$quantity=$row->Quantity;
	$Total_Price=$row->Total_Price;

	echo" 
    <tr>
         <td>$cardSurname</td> <td>$cardNumber</td> <td>$expDate</td> <td>$cardType</td> <td>$SecurityCode</td> <td>$quantity</td><td>$Total_Price</td>
  <td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/payment/edit.php?id=$paymentID\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>
   			<td style=\"text-align:center\"><a onclick=\"return deletePayment($paymentID)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>
 </tr>";

}
echo"
    
                 
                                    </tbody>
                                    
                                </table>
                              </form>
                           </div>

                        <!--</div> -->
                
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src=\"../js/jquery.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"../js/bootstrap.min.js\"></script>

<!-- Morris Charts JavaScript -->
<script src=\"../js/plugins/morris/raphael.min.js\"></script>
<script src=\"../js/plugins/morris/morris.min.js\"></script>
<script src=\"../js/plugins/morris/morris-data.js\"></script>

</body>

</html>
";
?>

