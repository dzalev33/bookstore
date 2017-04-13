<?php

 //pocetok na sesija
session_start();

//konekcija so baza
require_once 'includes/database_connect.php';

//Sql za zemanje na user i pass od bazata
$sql="SELECT * FROM administrators WHERE user_name LIKE \"".$_POST['user_name']."\"

                                    AND password LIKE \"".sha1($_POST['password'])."\"";

$result=$connection->query($sql);
if($result){      //vo while naedvame koj promenlivi ke gi zemime od bazata
    while($row=$result->fetch_object()){
        $user=$row->user_name;
        $admin_id=$row->admin_id;

                //ako adminID e razlicno od 0 i go najde vo bazata odnesi na administratorskata strana (logirano)
            if( $admin_id!=0) {
                $_SESSION['user_name'] = $_POST['user_name'];
                header("Location:".$settings['website_url']."administration/administrators/index.php");exit();

            }else{


                header("location:".$settings['website_url']."administration/index.php");exit();

            }
    }

}

    //login form

    header("location:".$settings['website_url']."administration/index.php");exit();
?>