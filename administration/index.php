<html>

<head>
    <title>Login Page</title>



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
require_once 'includes/database_connect.php';
require_once '../class.upload.php';


if(!isset($_SESSION['user_name'])){
   // ako username e razlicno od sesijata (ako e gresno najaven administrator) prikazi ja login formata
    ?>

    <form action="session.php" method="post" id="frmLogin">

        <div class="field-group">
            <div><label for="login">Username</label></div>
            <div><input name="user_name" type="text" class="input-field"></div>
        </div>
        <div class="field-group">
            <div><label for="password">Password</label></div>
            <div><input name="password" type="password" class="input-field"> </div>
        </div>
        <div class="field-group">
            <div><input type="submit" name="login" value="Login" class="form-submit-button"></span></div>
        </div>

    </form>
        <?php

}
//ako e logiranjeto uspesno odi na administration index.php.
else {
    //previerka dali vo URL ima akcija (action), ako ima akcija odnesi na soodvetna strana (edtit ili insert)

    if(isset($_GET['action'])) {
        include_once $_GET['page'] . '/'.$_GET['action'].'.php';


    }
    //ako nema kliknato nikakva akcija odnesi na view strana
    else {
        include_once $_GET['page'] . '/view.php';
    }

    include_once 'includes/menu_administration.php';

}

?>


        


</body>
</html>




