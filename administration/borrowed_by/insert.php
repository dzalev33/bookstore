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
<img src=\"../img/kniga_logo.jpg\"align=\"top\" id=\"Logo\">
</div>
";
require_once '../includes/menu_administration.php';
echo "

  
</div>
<div id=\"Content\">


<form name=\"myForm\" action=\"insert_exe.php\" method=\"post\" >
<table border=\"1\" style=\"border: black\" align=\"center\">
	
		
				<tr><td>Member</td><td>
		        		<select name=\"member_id\">";


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
	  				 </td>
					 </tr>
	

		
	<tr><td>Book</td><td>
						<select name='book_id'>";

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
	</td>
	</tr>
	
	
	
	
	
    <tr><td>Due Date</td><td><input type=\"text\" name=\"Due_Date\" value=\"\" /></td></tr>
    <tr><td>Return Date</td><td><input type=\"text\" name=\"Return_Date\" value=\"\" /></td></tr>

    <tr><td  ></td><td><input type=\"submit\" name=\"btn\" value=\"save\" /></td></tr>
</table>
</form>

</div>


<div id=\"Footer\"> Stefan Dzalev  </div>


</body>
<script src=\"".$settings['website_url']."administration/js/validationBorrowed_by.js\"></script>

</html>
";
?>
