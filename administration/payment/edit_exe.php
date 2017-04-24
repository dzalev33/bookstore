<?php




$sql="UPDATE payment SET

      card_holder_Surname='".$_POST['card_holder_Surname']."',
        card_number=".$_POST['card_number'].",
          card_expiary_date=".$_POST['card_expiary_date'].",
            card_type='".$_POST['card_type']."',
              security_code=".$_POST['security_code']."
              
          WHERE payment_id=".$_POST['id'];







$connection->query($sql);


header("Location:?page=payment");exit();

?>