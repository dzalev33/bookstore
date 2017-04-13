<?php
echo "
<div id=\"list_menu\" align=\"center\">
                             <!-- align=\"center\" id=\"list_menu\" Left side Menu list -->
 <ul >
 	  <li><a href=\"".$settings['website_url']."administration/administrators/index.php\">administrators</a></li>
 	  
 	    
 	     <li><a href = \"".$settings['website_url']."administration/author/index.php\">author</a>  </li>
 	     
 	     
 	     
		 <li><a href=\"".$settings['website_url']."administration/author_book/index.php\">author book</a></li>
		 <li><a href=\"".$settings['website_url']."administration/book/index.php\">book</a></li>
 		 <li><a href=\"".$settings['website_url']."administration/borrowed_by/index.php\">borrowed by</a></li>
		 <li><a href =\"".$settings['website_url']."administration/bucket/index.php\">bucket</a></li>
 		 <li><a href=\"".$settings['website_url']."administration/category/index.php\">category</a></li>
		 <li><a href=\"".$settings['website_url']."administration/members/index.php\">members</a></li>
     	  <li><a href=\"".$settings['website_url']."administration/order_book/index.php\">order book</a></li>
  		<li><a href=\"".$settings['website_url']."administration/payment/index.php\" >payment</a></li> 	
  		<li><a href=\"".$settings['website_url']."administration/logout.php\" >Logout</a></li> 
	
</ul>

 </div>
";
?>