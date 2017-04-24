<?php

$sql="UPDATE administrators SET

						`last_name`='".$_POST['last_name']."'
						
			WHERE admin_id=".$_POST['id'];

$connection->query($sql);//execute sql

header("Location:?page=administrators&message=update");exit();
?>