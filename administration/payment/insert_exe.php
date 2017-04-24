<?php



$sql="INSERT INTO payment (`card_holder_Surname`, `card_number`, `card_expiary_date`, `card_type`, `security_code`, `order_id`)
VALUES ('".$_POST['card_holder_Surname']."',".$_POST['card_number'].",".$_POST['card_expiary_date'].",'".$_POST['card_type']."',".$_POST['security_code'].",".$_POST['order_id'].")";
	

$connection->query($sql);

header("Location:?page=payment&message=insert");exit();

?>