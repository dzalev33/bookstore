<?php



echo "



    <!-- Page content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                
                    
                     <a href=\"#\" class=\"btn btn-success\" id=\"menu-toggle\">Menu</a>

                   
                    

                
                
<form class=\"form-horizontal\" name=\"MyForm\" action=\"?page=category&action=edit_exe\" method=\"post\" onsubmit=\"return validationCategory()\">
<fieldset>";


$sql="SELECT * FROM category
		WHERE category.category_id=".$_GET['id'];
$result=$connection->query($sql);


while ($row=$result->fetch_object()){
$type=$row->type;
$categoryID=$row->category_id;


echo "


<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Category</label>  
  <div class=\"col-md-4\">
  <input type=\"hidden\" name=\"id\" value=\"$categoryID\" />
  <input id=\"\" value=\"$type\" name=\"type\" type=\"text\" placeholder=\"\" class=\"form-control input-md\">
    
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






