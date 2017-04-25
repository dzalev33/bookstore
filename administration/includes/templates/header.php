<?php


///prikazuvcanje na greski (da se trgni)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//////////////////////////////

echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>


<title>".$settings['title']."</title>

</head>
<body>

                 <div id=\"wrapper\">
                
                    <!-- Sidebar -->
                          <div id=\"sidebar-wrapper\">
                            <ul class=\"sidebar-nav\">
                        <li>
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
                   <!-- end sidebar div--> 
                </div>";

$message="";
if(!isset($_GET['id']))$_GET['id']="";
if(isset($_GET['message']) && $_GET['message']=='insert')$message=" Uspesno vnesovte nov zapis";
if(isset($_GET['message']) && $_GET['message']=='delete')$message=" Uspesno izbrisavte zapis";
if(isset($_GET['message']) && $_GET['message']=='update')$message=" Uspesno editiravte zapis";

