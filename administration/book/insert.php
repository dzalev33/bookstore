<?php





echo "



    <!-- Page content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                
                    
                     <a href=\"#\" class=\"btn btn-success\" id=\"menu-toggle\">Menu</a>

                   
                    

                
                
<form class=\"form-horizontal\" name=\"myForm\" enctype=\"multipart/form-data\" action=\"?page=book&action=insert_exe\" method=\"post\" onsubmit=\"return validationBook()\">
<fieldset>



<!-- image --> 
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Image</label>
  <div class=\"col-md-4\">
    <input type=\"hidden\" name=\"action\" value=\"image\" /><input  name=\"my_field\" class=\"input-file\" type=\"file\">
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Price</label>  
  <div class=\"col-md-4\">
  <input  name=\"Price\" type=\"text\" placeholder=\"\" class=\"form-control input-md\">
    
  </div>
</div>


<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Language</label>  
  <div class=\"col-md-4\">
  <input id=\"\" name=\"Language\" type=\"text\" placeholder=\"\" class=\"form-control input-md\">
    
  </div>
</div>



<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Stock</label>  
  <div class=\"col-md-4\">
  <input id=\"\" name=\"Stock\" type=\"text\" placeholder=\"\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Description</label>  
  <div class=\"col-md-4\">
  <input id=\"\" name=\"description\" type=\"text\" placeholder=\"\" class=\"form-control input-md\">
    
  </div>
</div>


<!-- Select Basic -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Category</label>
  <div class=\"col-md-4\">
    <select id=\"\" name=\"category_id\" class=\"form-control\">";
$sql_category="SELECT * FROM category";
$result_category=$connection->query($sql_category);

while ($row_category=$result_category->fetch_object()){
    $type=$row_category->type;
    $categoryID=$row_category->category_id;

    echo "


            <option value=\"$categoryID\" style=\"align-self: center\" > $type</option>";




}
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



";
?>






