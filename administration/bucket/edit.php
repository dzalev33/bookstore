<?php




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

                   
                    

                
                
<form class=\"form-horizontal\" name=\"MyForm\" action=\"?page=bucket&action=edit_exe\" method=\"post\" onsubmit=\"return validationBucket()\">
<fieldset>";

$sql="SELECT * FROM bucket
			WHERE bucket.order_id=".$_GET['id'];
$result=$connection->query($sql);

while ($row=$result->fetch_object()) {
	$order_id = $row->order_id;
	$quantity = $row->Quantity;
	$TotalPrice = $row->Total_Price;

	echo "


<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Quantity</label>  
  <div class=\"col-md-4\">
  <input id=\"\" name=\"Quantity\" value=\"$quantity\" type=\"text\" placeholder=\"\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"textinpu\">Total Price</label>  
  <div class=\"col-md-4\">
  <input id=\"textinpu\" name=\"Total_Price\" value=\"$TotalPrice\" type=\"text\" placeholder=\"\" class=\"form-control input-md\">
    
  </div>
</div>";
}
echo "

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
<script src=\"".$settings['website_url']."administration/js/validationBucket.js\"></script>

</html>






";
?>






