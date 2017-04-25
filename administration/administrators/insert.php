<?php

echo "



    <!-- Page content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                
                    
                     <a href=\"#\" class=\"btn btn-success\" id=\"menu-toggle\">Menu</a>
                   
                    

                
                 <form class=\"form-horizontal\" name=\"myForm\" action=\"?page=administrators&action=insert_exe\" method=\"post\" onsubmit=\"return validationAdmin()\">
<fieldset>



<!-- Position-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"position\">Position</label>  
  <div class=\"col-md-4\">
  <input  name=\"position\" type=\"text\"  value=\"\" class=\"form-control input-md\">
    
  </div>
    </div>
  
  <!--Username-->
  <div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"position\">Username</label>  
  <div class=\"col-md-4\">
  <input  name=\"user_name\" type=\"text\"  value=\"\" class=\"form-control input-md\">
    

</div>
  </div>
<!-- Password input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"password\">Password</label>
  <div class=\"col-md-4\">
    <input  name=\"password\" type=\"password\"  value=\"\"  class=\"form-control input-md\" required=\"\">
    
  </div>
</div>



<!-- First Name  input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"first_name\">First Name</label>  
  <div class=\"col-md-4\">
  <input  name=\"first_name\" type=\"text\"  value=\"\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<!-- Last Name  input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"last_name\">Last Name</label>  
  <div class=\"col-md-4\">
  <input  name=\"last_name\" type=\"text\"  value=\"\" class=\"form-control input-md\">
    
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






