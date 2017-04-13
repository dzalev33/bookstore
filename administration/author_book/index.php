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
<script>
function delete_ad(id)
{

    var val=confirm(\"Dali sakate da go izbrisite adminot?\");

        if(val==true){
                window.location.href=\"delete_exe.php?id=\"+id
        }else{
                return false;
        }//end if
}//end function
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
<title>".$settings['title']."</title>
</head>
<body>

<div id=\"Header\">

<ul class=\"topnav\" id=\"myTopnav\">
 <li><a href=\"".$settings['website_url']."administration/author_book/insert.php\">Insert author book</a></li>
 
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
		
    
           <tr><td>author</td> <td>book</td><td>Price</td><td style=\"text-align:center\">edit</td><td style=\"text-align:center\">delete</td></tr>";

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
				<td style=\"text-align:center\"><a href=\"".$settings['website_url']."administration/author_book/edit.php?id=$authorBook_id\"><img src=\"".$settings['website_url']."images/edit.png\" width=\"20\" alt=\"edit\" /></a></td>
   			<td style=\"text-align:center\"><a onclick=\" return delete_ad($authorBook_id)\"><img src=\"".$settings['website_url']."images/delete.png\" width=\"20\" alt=\"delete\" /></a></td>
 
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

?>