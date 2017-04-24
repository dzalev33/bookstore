<?php



$sql="INSERT INTO bucket (Quantity, Total_Price)
VALUES ('".$_POST['Quantity']."',".$_POST['Total_Price'].")";

$connection->query($sql);//konekcija

//da te vrati na strana index.php posle vnesvanje vo baza
header("Location:?page=bucket");exit();

?>