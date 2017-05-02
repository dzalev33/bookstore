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


    <div>
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
?>
<?php
$errorMsg="";
if(!empty($_POST['user_name']) && (strlen($_POST['user_name'])<3)){



    $errorMsg="Username needs to be  longer than 3 Characters";
}
else {
    //ako username i pass poleto e prazno//
    if(!empty($_POST['user_name'])&&!empty($_POST['password'])) {
        //Sql za zemanje na user i pass od bazata
        $sql = "SELECT * FROM administrators WHERE user_name LIKE \"" . $_POST['user_name'] . "\"
        
                                            AND password LIKE \"" . sha1($_POST['password']) . "\"";

        $result = $connection->query($sql);
        if ($result->num_rows>0) {      //vo while naedvame koj promenlivi ke gi zemime od bazata
            while ($row = $result->fetch_object()) {
                $user = $row->user_name;
                $admin_id = $row->admin_id;

                //ako adminID e razlicno od 0 i go najde vo bazata odnesi na administratorskata strana (logirano)
                if ($admin_id != 0) {
                    $_SESSION['user_name'] = $_POST['user_name'];
                    header("Location:" . $settings['website_url'] . "administration?page=administrators");
                    exit();

                }
            }

        }
        else {
            $errorMsg = "Wrong Credentials";
        }

    }
}

if(!isset($_SESSION['user_name'])){
  
   // ako username e razlicno od sesijata (ako e gresno najaven administrator) prikazi ja login formata
    ?>








      <div class="container">

            <h3>Login</h3>


            <form role="form" action="index.php" method="post" id="frmLogin">

                <div class="form-group">
                    <input name="user_name" type="text"  class="form-control input-field" placeholder="Username" value="<?php
                    if (isset($_POST['user_name'])) {
                        echo $_POST['user_name'];
                    }
                    ?>">

                </div>

                <div class="form-group">
                    <input  class="form-control input-field" placeholder="Password" name="password" type="password">
                </div>

                <!-- button -->
                <div class="modal-footer">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block">Submit</button>
                </div>

            </form>
            <?php

}
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
        if(isset($_GET['page'])) {
            include_once $_GET['page'] . '/view.php';

        } else {
            include_once 'administrators/view.php';
        }
        include_once 'includes/templates/footer.php';

    }


}

?>







</body>
</html>
