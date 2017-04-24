<?php
// update na bazata
$sql="UPDATE author SET

		`firstname`='".$_POST['firstname']."'
		`lastname`='".$_POST['lastname']."'
		
				WHERE author_id=".$_POST['id'];
//konekcija so baza
$connection->query($sql);
//vrakanje na index strana za da ne se gledaat podatocite sto gi vnesuvame
header("Location:?page=author");exit();
?>
