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

echo "



    <!-- Page content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                
                    
                     <a href=\"#\" class=\"btn btn-success\" id=\"menu-toggle\">Menu</a>

                   
                    

                
                
<form class=\"form-horizontal\" name=\"MyForm\" action=\"insert_exe.php\" method=\"post\" onsubmit=\"return validationOrder_book()\">
<fieldset>



<!-- Select Basic -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Book</label>
  <div class=\"col-md-4\">
    <select id=\"\" name=\"book_id\" class=\"form-control\">";

//databese connect for book table
$sql_book = "SELECT * FROM book";
$result_book = $connection->query($sql_book);

//while for displaying category with selection
while ($row_book = $result_book->fetch_object()) {
	$bookID = $row_book->book_id;
	$bookTitle = $row_book->Title;


	echo " <option value=\"$bookID \" >$bookTitle</option>";


} //End while for category




echo "

    </select>
  </div>
</div>

<!-- Select Basic -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Quantity</label>
  <div class=\"col-md-4\">
    <select id=\"\" name=\"order_id\" class=\"form-control\">";
//databese connect for book table
$sql_Quantity = "SELECT * FROM bucket";
$result_Quantity = $connection->query($sql_Quantity);

//while for displaying category with selection
while ($row_Quantity = $result_Quantity->fetch_object()) {

	$orderID=$row_Quantity->order_id;
	$quantity = $row_Quantity->Quantity;




	echo " <option value=\"$orderID \" >$quantity </option>";


} //End while for category




echo "
	    			 

    </select>
  </div>
</div>

<!-- Select Basic -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Total Price</label>
  <div class=\"col-md-4\">
    <select id=\"\" name=\"order_id\" class=\"form-control\">";
//databese connect for book table
$sql_TotalPrice = "SELECT * FROM bucket";
$result_TotalPrice = $connection->query($sql_TotalPrice);

//while for displaying category with selection
while ($row_TotalPrice = $result_TotalPrice->fetch_object()) {

	$orderID=$row_TotalPrice->order_id;
	$TotalPrice = $row_TotalPrice->Total_Price;




	echo " <option value=\"$orderID \" >$TotalPrice </option>";


} //End while for category




echo "
    </select>
  </div>
</div>




<!-- Button -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"btn\"></label>
  <div class=\"col-md-4\">
    <button  name=\"btn\"  type=\"submit\"value=\"save\" class=\"btn btn-block btn-success\">Save</button>
  </div>
</div>

</fieldset>
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
<script src=\"".$settings['website_url']."administration/js/validationOrder_book.js\"></script>

</html>






";
?>






