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

<!-- Menu toggle script -->
<script>
    $(\"#menu-toggle\").click( function (e){
        e.preventDefault();
        $(\"#wrapper\").toggleClass(\"menuDisplayed\");
    });
</script>

</body>
<script src=\"".$settings['website_url']."administration/js/validationBook.js\"></script>

</html>






";
?>






