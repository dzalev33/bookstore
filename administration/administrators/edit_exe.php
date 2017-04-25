<?php



$oblectEdit= new Database();

$table_name="administrators";
$column_value=" `last_name`='".$_POST['last_name']."' ";
$pk="admin_id";
$pk_value=$_POST['id'];

$oblectEdit->editINT($table_name,$column_value,$pk,$pk_value);
/*
$sql="UPDATE administrators SET

						`last_name`='".$_POST['last_name']."'
						
			WHERE admin_id=".$_POST['id'];

$connection->query($sql);//execute sql
*/
//header("Location:?page=administrators&message=update");exit();
echo "<script>window.location.replace(\"?page=administrators&message=update\");
</script>";
?>