<?php





$sql="UPDATE bucket SET

    Quantity='".$_POST['Quantity']."',
      Total_Price=".$_POST['Total_Price']."
        WHERE order_id=".$_POST['id'];

$connection->query($sql);//konekcija

//da te vrati na strana index.php posle vnesvanje vo baza
header("Location:?page=bucket&message=update");exit();

?>