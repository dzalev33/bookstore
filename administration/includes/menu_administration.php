<?php
echo "

<div class=\"collapse navbar-collapse navbar-ex1-collapse\">

    <ul class=\"nav navbar-nav side-nav\">
        <li class=\"active\">
              <a href=\"".$settings['website_url']."administration/administrators/index.php\"><i class=\"fa fa-fw fa-dashboard\"></i> Administrators</a>
        </li>
        <li>
            <a href = \"".$settings['website_url']."administration/author/index.php\">author</a> 
        </li>
        <li>
           <a href=\"".$settings['website_url']."administration/author_book/index.php\">author book</a>
        </li>
        <li>
            <a href=\"".$settings['website_url']."administration/book/index.php\">book</a>
        </li>
        <li>
            <a href=\"".$settings['website_url']."administration/borrowed_by/index.php\">borrowed by</a>
        </li>
        <li>
            <a href =\"".$settings['website_url']."administration/bucket/index.php\">bucket</a>
        </li>
        
        <li>
           <a href=\"".$settings['website_url']."administration/category/index.php\">category</a>
        </li>
        <li>
           <a href=\"".$settings['website_url']."administration/members/index.php\">members</a>
        </li>
        <li>
           <a href=\"".$settings['website_url']."administration/order_book/index.php\">order book</a>
        </li>
        <li>
          <a href=\"".$settings['website_url']."administration/payment/index.php\" >payment</a>
        </li>
        <li>
          <a href=\"".$settings['website_url']."administration/logout.php\" ><i class=\"fa fa-fw fa-power-off\"></i>Logout</a>
        </li>
    </ul>
    <!--tuka se klava menito-->
</div>

 </div>
";
?>




