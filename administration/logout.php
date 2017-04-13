<?php
/**
 * Created by PhpStorm.
 * User: stefan
 * Date: 29.3.17
 * Time: 18:42
 */
session_start();

require_once "includes/settings.php";
session_destroy();
unset($_SESSION['user_name']);
header("Location:".$settings['website_url']."administration/index.php");

?>