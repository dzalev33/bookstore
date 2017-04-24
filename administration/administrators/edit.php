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
                   
                    

                
                 <form class=\"form-horizontal\"  name=\"myForm\" action=\"?page=administrators&action=edit_exe\" method=\"post\" onsubmit=\"return validationAdmin()\">
<fieldset>";
$sql="SELECT * FROM administrators WHERE admin_id=".$_GET['id'];

$result=$connection->query($sql);
while($row=$result->fetch_object()) {
    $user = $row->user_name;
    $position = $row->position;
    $pass = $row->password;
    $firsName = $row->first_name;
    $lastName = $row->last_name;
    $admin_id = $row->admin_id;
    echo "



<!-- Position-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"position\">Position</label>  
  <div class=\"col-md-4\">
  <input  name=\"position\" type=\"text\"  value=\"$position\" class=\"form-control input-md\">
    
  </div>
    </div>
  
  <!--Username-->
  <div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"position\">Username</label>  
  <div class=\"col-md-4\">
  <input  name=\"user_name\" type=\"text\"  value=\"$user\" class=\"form-control input-md\">
    

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
  <input  name=\"first_name\" type=\"text\"  value=\"$firsName\" class=\"form-control input-md\" required=\"\">
    
  </div>
</div>

<!-- Last Name  input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"last_name\">Last Name</label>  
  <div class=\"col-md-4\">
  <input type=\"hidden\" name=\"id\" value=\"$admin_id\" >
  <input  name=\"last_name\" type=\"text\"  value=\"$lastName\" class=\"form-control input-md\">
    
  </div>
</div>";
}
echo "

<!-- Button -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"btn\"></label>
  <div class=\"col-md-4\">
        <button  name=\"btn\"  type=\"submit\" value=\"EDIT\" class=\"btn btn-block btn-success\">Edit</button>
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
<script src=\"".$settings['website_url']."administration/js/validationAdministrators.js\"></script>

</html>






";
?>






