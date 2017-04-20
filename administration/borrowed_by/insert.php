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
require_once '../includes/menu_administration.php';
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

                   
                    

                
                
<form class=\"form-horizontal\" name=\"myForm\" action=\"insert_exe.php\" method=\"post\">
<fieldset>



<!-- Select Basic -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Member</label>
  <div class=\"col-md-4\">
    <select id=\"\" name=\"member_id\" class=\"form-control\">";
//databese connect for mambers table
$sql_member="SELECT * FROM members";
$result_member=$connection->query($sql_member);

//while for displaying members with selection
while ($row_member=$result_member->fetch_object()){
	$memberID=$row_member->member_id;
	$memberName=$row_member->member_firstname;
	$memberLastname=$row_member->member_lastname;


	echo " <option value=\"$memberID\" />$memberName $memberLastname</option>";


} //End while for members




echo "	
    
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Book</label>
  <div class=\"col-md-4\">
    <select id=\"\" name=\"book_id\" class=\"form-control\">";

//databese book connection
$sql_book="SELECT * FROM book";
$result_book=$connection->query($sql_book);

//while for displaying books
while ($row_book=$result_book->fetch_object()) {
	$bookID=$row_book->book_id;
	$bookTitle=$row_book->Title;


	echo "<option value=\"$bookID\" >$bookTitle</option>";


}

echo "
    </select>
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Due Date</label>  
  <div class=\"col-md-4\">
  <input id=\"\" name=\"Due_Date\" type=\"text\" placeholder=\"\" class=\"form-control input-md\">
    
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"textinpu\">Return Date</label>  
  <div class=\"col-md-4\">
  <input id=\"textinpu\" name=\"Return_Date\" type=\"text\" placeholder=\"\" class=\"form-control input-md\">
    
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
<script src=\"".$settings['website_url']."administration/js/validationBorrowed_by.js\"></script>

</html>






";
?>






