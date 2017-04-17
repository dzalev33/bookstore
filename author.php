<?php require_once 'administration/includes/database_connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>

        .navbar.navbar-inverse {
            border: none;
        }
        .navbar .navbar-brand {
            padding-top: 0px;
        }
        .navbar .navbar-brand img {
            height: 50px;
        }



    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online BookStore</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">
</head>

<body>

<!--Logo header image-->
<div class="page-header no-margin no-padding">
    <img src="images/cropped-header2.jpg" alt="" class="img-responsive " width="100%">
</div>




<!--top navigation bar-->
<nav class="navbar navbar-inverse navbar-static-top no-padding no-margin"  role="navigation  ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--Logo-->
            <a class="navbar-brand" href="#">
                <img src="images/kniga_logo.jpg"  >
            </a>
        </div>
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">about</a></li>
                <li><a href="#">contact</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container-fluid">
    <?php
    $sql="SELECT * 
FROM  author_book
INNER JOIN author ON author.`author_id` = author_book.`author_id` 
INNER JOIN book ON book.`book_id` = author_book.`book_id`
INNER JOIN category ON category.`category_id` = book.`category_id`
WHERE author.author_id=".$_GET['id'];

    $result=$connection->query($sql);
    while ($row=$result->fetch_object()) {
        $BookTitle = $row->Title;

        $bookPrice = $row->Price;
        $BookLanguage = $row->Language;
        $bookStock = $row->Stock;
        $BookVategoryId = $row->category_id;
        $bookCategory = $row->type;
        $avtor_name = $row->firstname;
        $avtor_lastname = $row->lastname;
        $author_pic=$row->img_path;
        
        $Photo = $row->img_path;
        //"upload/"

        $img_path = $settings['website_url'] . "upload/" . $Photo;
        echo "  
    <div class=\"row\">
        <div class=\"col-md-7\">
            <a href=\"#\">
                <img class=\"img-responsive\" src=\"$img_path\" alt=\"img_path\">
            </a>
        </div>
        <div class=\"col-md-5\">
            <h3>$avtor_name $avtor_lastname</h3>
            <h4>Biography </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
            
        </div>
    </div>
</div>";
    }  ?>
    <!--footer-->

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <p>Stefan Dzalev</p>
            </div>
            <div class="bottom-footer">
                <div class="col-md-5">
                    All rights reseaved
                </div>
                <div class="col-md-7">
                    <ul class="footer-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>