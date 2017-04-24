<?php



$number_of_value=count($_POST['delete']);

$array_value=$_POST['delete'];
for($counter=0;$counter<$number_of_value;$counter++){
    $delete=$array_value[$counter];


    $sql="DELETE FROM author WHERE author_id=".$delete;

    $connection->query($sql);//execute sql


}

header("Location:?page=author");exit();
?>