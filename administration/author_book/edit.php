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
                   
                    

                
                 <form class=\"form-horizontal\"  name=\"myForm\" action=\"?page=author_book&action=edit_exe\" method=\"post\" onsubmit=\"return validationAdmin()\">
<fieldset>";

$sql="SELECT * 
FROM  author_book
INNER JOIN author ON author.`author_id` = author_book.`author_id` 
INNER JOIN book ON book.`book_id` = author_book.`book_id`
WHERE author_book.author_book_id=".$_GET['id'];
$result=$connection->query($sql);

while ($row=$result->fetch_object()){
	$authorBook_id=$row->author_book_id;
	$authorId=$row->author_id;
	$bookId=$row->book_id;
	//author
	$firstName=$row->firstname;
	$lastName=$row->lastname;
	//book
	$title=$row->Title;
	$price=$row->Price;

	echo "
				



<!-- book-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"position\">Author</label>  
  <div class=\"col-md-4\">
  <input  name=\"authorname\" type=\"text\"  value=\"$firstName $lastName\" class=\"form-control input-md\">
    
  </div>
    </div>
  
  <!--Username-->
  <div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"position\">Title</label>  
  <div class=\"col-md-4\">
  <input  name=\"title\" type=\"text\"  value=\"$title\" class=\"form-control input-md\">
    

</div>
  </div>




<!-- Last Name  input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"last_name\">Price</label>  
  <div class=\"col-md-4\">

  <input  name=\"price\" type=\"text\"  value=\"$price\" class=\"form-control input-md\">
    
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
<script src=\"".$settings['website_url']."administration/js/validationAuthorBook.js\"></script>

</html>






";
?>






