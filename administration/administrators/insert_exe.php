<?php

$username= $position = $password = $first_name= $lastname = "";

if(isset($_POST['position']) && strlen($_POST['position']>3)){

    $position=($_POST['position']);

}else{
 header("Location:?page=administrators&action=insert&message_position=short_position");exit();
}

if(isset($_POST['user_name']) && strlen($_POST['user_name']>3)){

    $username=($_POST['user_name']);

}else{

 header("Location:?page=administrators&action=insert&message_username=short_username");exit();
}

if(isset($_POST['password']) && strlen($_POST['password']>3)){

    $password=($_POST['password']);

}else{

   header("Location:?page=administrators&action=insert&message_error=short_password");exit();
}
if(isset($_POST['first_name']) && strlen($_POST['first_name']>3)){

    $first_name=$_POST['first_name'];

}else{

  header("Location:?page=administrators&action=insert&message_error=short_first");exit();
}
if(isset($_POST['last_name']) && strlen($_POST['last_name']>3)){

    $lastname=$_POST['last_name'];

}else{
    header("Location:?page=administrators&action=insert&message_error=short_last");exit();
}

//if ($_POST['user_name'] != "") {
//    $_POST['first_name'] = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
//    if ($_POST['first_name'] == "") {
//        header("Location:?page=administrators&action=insert_exe");
//        $errors .= 'Please enter a valid name.<br/><br/>';
//    }
//} else {
//    $errors .= 'Please enter your name.<br/>';
//}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($username);
    $position = test_input($position);
    $password = test_input($password);
    $first_name = test_input($first_name);
    $lastname = test_input($lastname);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}










$oblectEdit= new Database();

$table_name=" administrators ";
$column_name=" `position`, `user_name`, `password`, `first_name`, `last_name` ";
$column_value=" '".$position."','".$username."','".sha1($password)."','".$first_name."','".$lastname."' ";

$oblectEdit->insert($table_name, $column_name, $column_value);

header("Location:?page=administrators&message=insert");exit();

?>