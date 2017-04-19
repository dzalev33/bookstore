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
<script>

function delete_author(authorID){
    
    var val=confirm(\"izbrisi go avtorot?\");
        
        if(val==true){
            window.location.href=\"delete_exe.php?id=\"+authorID
        } else {
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
            
           
            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> Settings <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                    
                    <li>
                        <a href=\"".$settings['website_url']."administration/author/insert.php\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> New Author </a>
                    </li>
                    
                  
                    <li class=\"divider\"></li>
                    <li>
                        <a href=\"#\"><i class=\"fa fa-fw fa-power-off\"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
      
        <!-- /.navbar-collapse -->
    </nav>

    <div id=\"page-wrapper\">

        <div class=\"container-fluid\">

            <!-- Page Heading -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">
                        Authors <small>Admin Page</small>
                    </h1>

                </div>";
require_once '../includes/menu_administration.php';
$message="";
if(!isset($_GET['id']))$_GET['id']="";
if(isset($_GET['message']) && $_GET['message']=='insert')$message=" Uspesno vnesovte nov zapis";
if(isset($_GET['message']) && $_GET['message']=='delete')$message=" Uspesno izbrisavte zapis";
if(isset($_GET['message']) && $_GET['message']=='update')$message=" Uspesno editiravte zapis";


echo "




            <!-- CONTENT--->
            <div class=\"row\">".$message."

                
                   

                       <!-- <div class=\"panel-body\"> -->
                            <div class=\"table-responsive\">
                            <form action=\"multi_delete.php\" method=\"post\">
                                <table class=\"table table-bordered table-hover table-striped\">
                                    <thead>
                                        <tr>
                                            <th>Picture</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>multi delete</th>
                                          </tr>
                                    </thead>";



$sql="SELECT * FROM author";
$result=$connection->query($sql);

while ($row=$result->fetch_object()){
    $authorName=$row->firstname;
    $authorLastname=$row->lastname;
    $author_id=$row->author_id;
    $Photo=$row->img_author;
    $bgcolor="yellow";
    if($type==$_GET['id']) $bgcolor="blue";
    //"upload/"

    $img_path=$settings['website_url']."upload/".$Photo;

    echo "<tr><td><img src=\"$img_path\" width=\"40\" alt=\"$Photo\"></td><td>$authorName</td> <td>$authorLastname</td>
                         			<td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/author/edit.php?id=$author_id\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>";
    //delete

    if($user!=$_SESSION['user_name']) 	echo "<td><a onclick=\"return delete_author($author_id)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>";
    if($user==$_SESSION['user_name']) 	echo "<td></td>";

    //multi delete
    if($user!=$_SESSION['user_name']) echo "<td><input type=\"checkbox\" name=\"delete[]\" value=\"$author_id\" ></td>";
    if($user==$_SESSION['user_name']) echo "<td></td>";


    echo "         </tr>";


}//end of While
echo "
                                    </tbody>
                                     <tr><td colspan=\"5\"></td><td>  <input type=\"submit\" name=\"btn_delete\" value=\"delete all\" class=\"btn-danger\" /></td></tr>
                                </table>
                              </form>
                           </div>

                        <!--</div> -->
                
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

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

