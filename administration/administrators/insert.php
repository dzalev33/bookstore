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
function delete_Borrowed(id) {

    var val=confirm(\"dali sakate da go izbrisite zapisot od bazata?\");
        
        if (val==true){
           window.location.href=\"delete_exe.php?id= \"+id
        
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
            
           
            
        </ul>
      
        <!-- /.navbar-collapse -->
    </nav>

    <div id=\"page-wrapper\">

        <div class=\"container-fluid\">

            <!-- Page Heading -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">
                       New Administrator <small>Admin Page</small>
                    </h1>

                </div>";
require_once '../includes/menu_administration.php';



echo "




            <!-- CONTENT--->
            <div class=\"\">

                
                 <form class=\"form-horizontal\" name=\"myForm\" action=\"insert_exe.php\" method=\"post\" onsubmit=\"return validationAdmin()\">
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






<!-- jQuery -->
<script src=\"../js/jquery.js\"></script>

<!-- Bootstrap Core JavaScript -->
<script src=\"../js/bootstrap.min.js\"></script>

<!-- Morris Charts JavaScript -->
<script src=\"../js/plugins/morris/raphael.min.js\"></script>
<script src=\"../js/plugins/morris/morris.min.js\"></script>
<script src=\"../js/plugins/morris/morris-data.js\"></script>

</body>
<script src=\"".$settings['website_url']."administration/js/validationAdministrators.js\"></script>

</html>
";
?>

