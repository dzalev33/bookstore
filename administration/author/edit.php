<?php


echo "



    <!-- Page content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                
                    
                     <a href=\"#\" class=\"btn btn-success\" id=\"menu-toggle\">Menu</a>

                   
                    

                
                 <form class=\"form-horizontal\"  name=\"myForm\" action=\"?page=author&action=edit_exe\" method=\"post\" onsubmit=\"return validationAuthor()\">
<fieldset>";

$sql="SELECT * FROM author WHERE author_id=".$_GET['id'];
$result=$connection->query($sql);

while ($row=$result->fetch_object()) {
    $authorName = $row->firstname;
    $authorLastname = $row->lastname;
    $author_id = $row->author_id;
    echo "



<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">First Name</label>  
  <div class=\"col-md-4\">
  <input  name=\"firstname\" type=\"text\"  value=\"$authorName\" class=\"form-control input-md\">
  
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Last Name</label>  
  <div class=\"col-md-4\">
  <input type=\"hidden\" name=\"id\" value=\"$author_id\" />
  <input name=\"lastname\" type=\"text\" value=\"$authorLastname\"  class=\"form-control input-md\">
  
  </div>
</div>";
}
echo "



<!-- Button -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"btn\"></label>
  <div class=\"col-md-4\">
    <button  name=\"btn\"  type=\"submit\" value=\"EDIT\" class=\"btn btn-block btn-success\">Save</button>
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






