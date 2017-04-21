<?php



echo "

    <div id=\"sidebar-wrapper\">
  

    <ul class=\"sidebar-nav\">
        <li class=\"active\">
              <a href=\"".$settings['website_url']."administration?page=administrators\"><i class=\"fa fa-fw fa-dashboard\"></i> Administrators</a>
        </li>
        <li>
            <a href = \"".$settings['website_url']."administration?page=author\">author</a> 
        </li>
        <li>
           <a href=\"".$settings['website_url']."administration?page=author_book\">author book</a>
        </li>
        <li>
            <a href=\"".$settings['website_url']."administration?page=book\">book</a>
        </li>
        <li>
            <a href=\"".$settings['website_url']."administration?page=borrowed_by\">borrowed by</a>
        </li>
        <li>
            <a href =\"".$settings['website_url']."administration?page=bucket\">bucket</a>
        </li>
        
        <li>
           <a href=\"".$settings['website_url']."administration?page=category\">category</a>
        </li>
        <li>
           <a href=\"".$settings['website_url']."administration?page=members\">members</a>
        </li>
        <li>
           <a href=\"".$settings['website_url']."administration?page=order_book\">order book</a>
        </li>
        <li>
          <a href=\"".$settings['website_url']."administration?page=payment\" >payment</a>
        </li>
        <li>
          <a href=\"".$settings['website_url']."administration/logout.php\" ><i class=\"fa fa-fw fa-power-off\"></i>Logout</a>
        </li>
    </ul>
    <!--tuka se klava menito-->
    


</div>

";
?>




