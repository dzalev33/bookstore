<?php


echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
<script>
function delete_ad(id)
{

    var val=confirm(\"Dali sakate da go izbrisite zapisot? \");

        if(val==true){
                window.location.href=\"?page=author_book&action=delete_exe&id=\"+id
        }else{
                return false;
        }//end if
}//end function
</script>

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
//require_once '../includes/menu_administration.php';
echo "
       <!--insert administrators-->
           
           
        </ul>
    </div>";

$message="";
if(!isset($_GET['id']))$_GET['id']="";
if(isset($_GET['message']) && $_GET['message']=='insert')$message=" Uspesno vnesovte nov zapis";
if(isset($_GET['message']) && $_GET['message']=='delete')$message=" Uspesno izbrisavte zapis";
if(isset($_GET['message']) && $_GET['message']=='update')$message=" Uspesno editiravte zapis";


echo "



    <!-- Page content -->
    <div id=\"page-content-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                
                    
                     <a href=\"#\" class=\"btn btn-success\" id=\"menu-toggle\">Menu</a>
                         <a href=\"".$settings['website_url']."administration?page=author_book&action=insert\" class=\"btn btn-success pull-right\" id=\"menu-toggle\">Merge Author and Book</a>
                   
                    
                    <div class=\"table - responsive\">
                            <form action=\"\" method=\"post\">
                                <table class=\"table table - bordered table - hover table - striped\">
                                    <thead>
                                        <tr>
                                                <th>Author</th>
                                            <th>Book</th>
                                            <th>Price</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                          </tr>
                                    </thead>";
$sql="SELECT * 
FROM  author_book
INNER JOIN author ON author.`author_id` = author_book.`author_id` 
INNER JOIN book ON book.`book_id` = author_book.`book_id`";
$result=$connection->query($sql);

while ($row=$result->fetch_object()){

	//author_book
	$authorId=$row->author_id;
	$bookId=$row->book_id;
	$authorBook_id=$row->author_book_id;
	//author
	$firstName=$row->firstname;
	$lastName=$row->lastname;

	//book
	$title=$row->Title;
	$price=$row->Price;

	echo "
				<tr>
					<td>$firstName - $lastName</td>
					<td>$title</td>
					<td>$price</td>
				<td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/?page=author_book&action=edit&id=$authorBook_id\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>
   			<td style=\"text-align:center\"><a onclick=\" return delete_ad($authorBook_id)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>
 
				</tr>";


}

echo "
                                    </tbody>
                                </table>
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
</html>






";
?>






