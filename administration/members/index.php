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

function delete_member(id)
{

    var val=confirm(\"Dali sakate da go izbrisite clenot\");

        if(val==true){
                window.location.href=\"delete_exe.php?id=\"+id
        }else{
                return false;
        }//end if
}//end function
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
                        <a href=\"".$settings['website_url']."administration/members/insert.php\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> New Member </a>
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
                        Members <small>Admin Page</small>
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
                                              <th>Firstname</th>
                                                <th>Lastname</th>
                                                  <th>Email</th>
                                                    <th>Tell number</th>
                                                      <th>Date of Birth</th>
                                                        <th>Registration Date</th>
                                                          <th>ZipCode</th>
                                                            <th>Country</th>
                                                             <th>City</th>
                                                              <th>Street</th>
                                                               <th>Edit</th>
                                                                <th>Delete</th>
                                                                 <th>Multi Delete</th>
                                               
                                            
                                          </tr>
                                    </thead>";


$sql="SELECT * FROM members";
$result=$connection->query($sql);


while ($row=$result->fetch_object()){
	$memberName=$row->member_firstname;
	$memberLastName=$row->member_lastname;
	$memberemail=$row->email;
	$memberTell_number=$row->tell_number;
	$memberDOB=$row->DOB;
	$memberReg_Date=$row->Registration_Date;
	$memberZipcode=$row->ZipCode;
	$memberCountry=$row->Country;
	$memberCity=$row->City;
	$memberStreet=$row->Street;
	$member_id=$row->member_id;
	$bgcolor="yellow";
	if($type==$_GET['id']) $bgcolor="blue";

	echo"<tr>
        <td>$memberName</td> <td>$memberLastName</td> <td>$memberemail</td> <td>$memberTell_number</td> <td>$memberDOB</td>
         <td>$memberReg_Date</td> <td>$memberZipcode</td> <td>$memberCountry</td> <td>$memberCity</td> <td>$memberStreet</td>
  <td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/members/edit.php?id=$member_id\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>";

	if($user!=$_SESSION['user_name']) echo "    			<td style=\"text-align:center\"><a onclick=\"return delete_member($member_id)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>";
	if($user==$_SESSION['user_name']) echo "  <td> </td> ";
	if($user!=$_SESSION['user_name']) echo "<td><input type=\"checkbox\" name=\"delete[]\" value=\"$member_id\" ></td>";
	if($user==$_SESSION['user_name']) echo "<td></td>";
	echo " </tr>";

}

echo "
    
                 
                                    </tbody>
                                     <tr><td colspan=\"12\"></td><td>  <input type=\"submit\" name=\"btn_delete\" value=\"delete all\" class=\"btn-danger\" /></td></tr>
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

