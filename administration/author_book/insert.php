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
<title>".$settings['title']."</title>
</head>
<body>

<div id=\"Header\">

<ul class=\"topnav\" id=\"myTopnav\">
   <li><a href = \"AdminPage.html\">Admin</a></li>
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

<form action=\"insert_exe.php\" method=\"post\">
<table border=\"1\" style=\"border: black\" align=\"center\">
    <tr><td>author</td>
    
    <td>
    <select name=\"author_id\"> ";

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

    </td>
    </tr>
    <tr><td>book</td>
    <td>
    
    
    <select name=\"book_id\">";

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
    <tr><td ></td><td><input type=\"submit\" name=\"btn\" value=\"save\" /></td></tr>
</table>
</form>


</div>


<div id=\"Footer\"> Stefan Dzalev  </div>


</body>

</html>
";
?>

