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

                   
                    

                
                
<form class=\"form-horizontal\" name=\"myForm\" enctype=\"multipart/form-data\" action=\"?page=book&action=edit_exe\" method=\"post\" onsubmit=\"return validationBook()\">
<fieldset>";
$sql="SELECT * FROM book
				INNER JOIN category ON category.`category_id` = book.`category_id`
				 WHERE book.book_id=".$_GET['id'];

$result=$connection->query($sql);

while ($row=$result->fetch_object()){
    $bookId=$row->book_id;
    $BookTitle=$row->Title;
    $bookPrice=$row->Price;
    $BookLanguage=$row->Language;
    $bookStock=$row->Stock;
    $BookcategoryId=$row->category_id;
    $booktype=$row->type;
    $description=$row->description;

    echo "




<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Price</label>  
  <div class=\"col-md-4\">
  <input  name=\"Price\" value=\"$bookPrice\" type=\"text\" placeholder=\"\" class=\"form-control input-md\">
    
  </div>
</div>


<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Title</label>  
  <div class=\"col-md-4\">
  <input id=\"\" name=\"Title\" value=\"$BookTitle\" type=\"text\" placeholder=\"\" class=\"form-control input-md\">
    
  </div>
</div>



<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Language</label>  
  <div class=\"col-md-4\">
  <input id=\"\" name=\"Language\" type=\"text\" value=\"$BookLanguage\" placeholder=\"\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Stock</label>  
  <div class=\"col-md-4\">
  <input type=\"hidden\" name=\"id\" value=\"$bookId\" />
  <input id=\"\" name=\"Stock\" type=\"text\" value=\"$bookStock\" placeholder=\"\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form - group\">
  <label class=\"col-md-4 control-label\" for=\"\">Description</label>  
  <div class=\"col-md-4\">

  <input id=\"\" name=\"description\" type=\"text\" value=\"$description\" placeholder=\"\" class=\"form-control input- md\">
    
  </div>
</div>





<!-- Select Basic -->

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Category</label>
  <div class=\"col-md-4\">
    <select id=\"\" name=\"category_id\" class=\"form-control\">";
    $sql_categoryType="SELECT * FROM category";
    $result_categoryType=$connection->query($sql_categoryType);

    while ($row_categoryType=$result_categoryType->fetch_object()){

        $selected="";//deklaracija i inicijalizacija

        //table category
        $type=$row_categoryType->type;
        $categoryID=$row_categoryType->category_id;

        //compare PK==FK
        if($categoryID==$BookcategoryId){$selected="selected";}
        if($categoryID!=$BookcategoryId){$selected="";}
        echo "<option value=\"$categoryID\" $selected>$type</option> ";

    }
}
echo "
    
    </select>
  </div>
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






