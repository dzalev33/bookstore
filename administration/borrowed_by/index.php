<?php

session_start();

require_once '../includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
    header("Location:".$settings['website_url']."administration/index.php");
}

echo "

<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
<head>

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

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 100%;
    background-color: #f1f1f1;
    
    font-size: small;

}

li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

li a.active {
    background-color: #838783;
    color: white;
}

li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
</style>

<link href=\"".$settings['website_url']."administration/css/style.css\" rel=\"stylesheet\" type=\"text/css\">
<meta name=\"viewport\" content=\"width=device-width\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
<title>Online Library</title>
</head>
<body>

<div id=\"Header\">

<ul class=\"topnav\" id=\"myTopnav\">
<li><a href=\"".$settings['website_url']."administration/borrowed_by/insert.php\">Insert borrowed by</a></li>
 
</ul>





</div>
<div id=\"Left\" >
<div>
<img src=\"".$settings['website_url']."administration/img/kniga_logo.jpg\"align=\"top\" id=\"Logo\">
</div>
";
require_once '../includes/menu_administration.php';
echo "

  
</div>
<div id=\"Content\">

<table border=\"1\" align='center' width='100%'>
				
					
    
               <tr><td>Member</td><td>Book</td><td>Due_Date</td> <td>Return_Date</td><td style=\"text-align:center\">edit</td><td style=\"text-align:center\">delete</td></tr>";
               
               $sql="SELECT * FROM borrowed_by
              				 INNER JOIN book ON book.`book_id` = borrowed_by.`book_id` 
												INNER JOIN members ON members.`member_id` = borrowed_by.`member_id`";
               $result=$connection->query($sql);
               
               while ($row=$result->fetch_object()){
               	$dueDate=$row->Due_Date;
               	$returnDate=$row->Return_Date;
               	$memberName=$row->member_firstname;
               	$memberLastName=$row->member_lastname;
               	$BookTitle=$row->Title;
                $borrowed_by_id=$row->borrowed_by_id;
               	
               	echo "<tr><td>$memberName $memberLastName </td><td>$BookTitle</td><td>$dueDate</td> <td>$returnDate</td>
               	 <td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/borrowed_by/edit.php?id=$borrowed_by_id\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>
   			<td style=\"text-align:center\"><a onclick=\"return delete_Borrowed($borrowed_by_id)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>
 </tr>";
               	
               		
               }

         
         echo "
                       
      


</table>


</div>


<div id=\"Footer\"> Stefan Dzalev  </div>


</body>

</html>
";
?>

