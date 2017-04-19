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
                       New Author <small>Admin Page</small>
                    </h1>

                </div>";
require_once '../includes/menu_administration.php';



echo "




            <!-- CONTENT--->
            <div class=\"\">

                
<form class=\"form-horizontal\"   action=\"insert_exe.php\" method=\"post\">
<fieldset>



<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"selectbasic\">Author</label>
  <div class=\"col-md-4\">
    <select name=\"author_id\" class=\"form-control\"> ";

$sql_author="SELECT * FROM author";
$result_author=$connection->query($sql_author);

while ($row_author=$result_author->fetch_object()){

    //get value from database table author
    $authorName=$row_author->firstname;
    $authorLastname=$row_author->lastname;
    $author_id=$row_author->author_id;

    echo "<option value=\"$author_id\">$authorName - $authorLastname</option>";

}//end while author
echo " 
    </select>
  </div>
</div>


    
    
    <div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"\">Book</label>
  <div class=\"col-md-4\">
    <select name=\"book_id\" class=\"form-control\">";

$sql_book="SELECT * FROM book";
$result_book=$connection->query($sql_book);

while ($row_book=$result_book->fetch_object()){


    //get value from database table book
    $BookTitle=$row_book->Title;
    $bookId=$row_book->book_id;

    echo "<option value=\"$bookId\">$BookTitle</option>";

}//end while book
echo "
</select>
    </select>
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

</html>
";
?>

