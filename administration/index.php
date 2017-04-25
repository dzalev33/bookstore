<html>

<head>
    <title></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>                    <!--sidebar menu -->
    <link rel="stylesheet" href="css/sidebar.css">

</head>

<body >


    <div >



<?php

///prikazuvcanje na greski (da se trgni)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//////////////////////////////////////////

//zapocnuvanje na sesija
session_start();
include '../class/database.php';
require_once 'includes/database_connect.php';
require_once '../class.upload.php';
require_once 'includes/menu_administration.php';


if(!isset($_SESSION['user_name'])){
   // ako username e razlicno od sesijata (ako e gresno najaven administrator) prikazi ja login formata
    ?>


    <div class="container">

        <h3>Administrators page</h3>

        <!-- data-toggle lets you display modal without any JavaScript -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#popUpWindow">Login</button>

        <div class="modal fade" id="popUpWindow">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Log In</h3>
                    </div>

                    <!-- body (form) -->
                    <div class="modal-body">
                        <form role="form" action="session.php" method="post" id="frmLogin">

                            <div class="form-group">
                                <input name="user_name" type="text"  class="form-control input-field" placeholder="Username">
                            </div>

                            <div class="form-group">
                                <input  class="form-control input-field" placeholder="Password" name="password" type="password">
                            </div>

                            <!-- button -->
                            <div class="modal-footer">
                                <button type="submit" name="login" value="Login" class="btn btn-primary btn-block">Submit</button>
                            </div>

                        </form>
                    </div>



                </div>
            </div>
        </div>

    </div>
    
    
        <?php

}
//ako e logiranjeto uspesno odi na administration index.php.


else {

    //previerka dali vo URL ima akcija (action), ako ima akcija odnesi na soodvetna strana (edtit ili insert)

    if(isset($_GET['action'])) {
        include_once 'includes/templates/header.php';

        include_once $_GET['page'] . '/'.$_GET['action'].'.php';

        include_once 'includes/templates/footer.php';

    }
    //ako nema kliknato nikakva akcija odnesi na view strana
    else {

        include_once 'includes/templates/header.php';
        include_once $_GET['page'] . '/view.php';
        include_once 'includes/templates/footer.php';

    }


}

?>




</body>
</html>




