<?php

echo "



    <!-- Page content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                
                    
                     <a href=\"#\" class=\"btn btn-success\" id=\"menu-toggle\">Menu</a>

                   
                    

                
                 <form class=\"form-horizontal\"  name = \"myForm\" enctype=\"multipart/form-data\" onsubmit=\"return Author()\" action=\"?page=author&action=insert_exe\" method=\"post\">
<fieldset>



<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Last Name</label>  
  <div class=\"col-md-4\">
  <input  name=\"firstname\" type=\"text\"  value=\"\" class=\"form-control input-md\">
  
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Last Name</label>  
  <div class=\"col-md-4\">
  <input name=\"lastname\" type=\"text\" value=\"\"  class=\"form-control input-md\">
  
  </div>
</div>

<!-- File Button --> 
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Picture</label>
  <div class=\"col-md-4\">
   <input type=\"hidden\" name=\"action\" value=\"image\" /> <input  name=\"my_field\" class=\"input-file\" type=\"file\">
  </div>
</div>

<!-- Button -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"btn\"></label>
  <div class=\"col-md-4\">
    <button  name=\"btn\"  type=\"submit\" value=\"save\" class=\"btn btn-block btn-success\">Save</button>
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
                <!--END PAGE -->


";
?>






