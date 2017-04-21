<html>

<head>
    <title>Login Page</title>



</head>

<body >


    <div >



<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



session_start();
require_once 'includes/database_connect.php';

if(!isset($_SESSION['user_name'])){
   // header("Location:".$settings['website_url']."administration?page=login");
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
else {
            include_once $_GET['page'] . '/view.php';

    include_once 'includes/menu_administration.php';

}

?>


        


</body>
</html>




