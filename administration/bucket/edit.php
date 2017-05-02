<?php





echo "



    <!-- Page content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                
                    
                     <a href=\"#\" class=\"btn btn-success\" id=\"menu-toggle\">Menu</a>

                   
                    

                
                
<form class=\"form-horizontal\" name=\"MyForm\" action=\"?page=bucket&action=edit_exe\" method=\"post\" onsubmit=\"return validationBucket()\">
<fieldset>";
$sql="SELECT * FROM bucket WHERE order_id=".$_GET['id'];
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




";
?>






