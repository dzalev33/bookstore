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
   
  <li><a href=\"Login.html\">Login</a></li>
 
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

<form name=\"myForm\" action=\"edit_exe.php\" method=\"post\" onsubmit=\"return validationBorrowed_By()\">
<table border=\"1\">";
               
                 $sql="SELECT * FROM borrowed_by
              				 INNER JOIN book ON book.`book_id` = borrowed_by.`book_id` 
												INNER JOIN members ON members.`member_id` = borrowed_by.`member_id`
            
                                                             WHERE borrowed_by.borrowed_by_id=".$_GET['id'];
               
              				
               $result=$connection->query($sql);
               
               while ($row=$result->fetch_object()){


                $members_ID=$row->member_id;
               	$dueDate=$row->Due_Date;
               	$returnDate=$row->Return_Date;
               	$memberName=$row->member_firstname;
               	$memberLastName=$row->member_lastname;
               	$BookTitle=$row->Title;
                $borrowed_by_id=$row->borrowed_by_id;
                   $bookID=$row->book_id;
               	
               	echo "








                 <tr><td>Member</td><td>
                 
                 <select name=\"member_id\">";

                   $sql_member="SELECT * FROM members";
                   $result_member=$connection->query($sql_member);

                   while($row_member=$result_member->fetch_object()){

                       $selected="";
                       $memberID=$row_member->member_id;
                       $Name=$row_member->member_firstname;
                       $LastName=$row_member->member_lastname;

                       if ($memberID==$members_ID){$selected="selected";}
                       if ($memberID!=$members_ID){$selected="";}

                              echo "<option value=\"$memberID\" $selected>$Name $LastName </<option>";
                   }
                 
                        echo"
                         
                         
               </select>
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                 <tr><td>Book</td><td>
                 <select name='book_id'>";


                   $sql_book="SELECT * FROM book";
                    $result_book=$connection->query($sql_book);

                    while ($row_book=$result_book->fetch_object()){


                        $selected_book="";

                        $bookID=$row_book->book_id;
                        $bookTitle=$row_book->Title;

                        if ($bookID==$bookID){$selected_book="selected";}
                        if ($bookID!=$bookID){$selected_book="";}


                        echo "<option value=\" $bookID\" $selected_book > $bookTitle</option> ";


                    }
                echo "

            </select>





                  <tr>
                            <td>Due_Date</td><td><input type=\"text\" name=\"Due_Date\" value=\"$dueDate\" /></td>
                                </tr>
                  <tr>
                                    <input type=\"hidden\" name=\"id\" value=\"$borrowed_by_id\" />
                        <td>Return_Date</td><td><input type=\"text\" name=\"Return_Date\" value=\"$returnDate\" /></td>
                                      </tr>";


               }





         echo "




                    <tr ><td><input type=\"submit\" name=\"btn\" value=\"EDIT\" /></td></tr>   
      


</table>
</form>

</div>


<div id=\"Footer\"> Stefan Dzalev  </div>


</body>
<script src=\"".$settings['website_url']."administration/js/validationBorrowed_by.js\"></script>

</html>
";
?>

