<?php





$sql="UPDATE category SET 
          type='".$_POST['type']."'
            WHERE category_id=".$_POST['id'];



$connection->query($sql);//konekcija

//da te vrati na strana index.php posle vnesvanje vo baza
header("Location:?page=category&message=update&id=".$_POST['type']);exit();

?>