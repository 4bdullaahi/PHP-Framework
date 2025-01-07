<?php 
require ("../lib/function.php");
require ("../lib/connection.php");
$sql = "delete from $_GET[table] where id= $_GET[id]";
$ress = $conn->query($sql);
if ($ress) {
	echo "deleted success";
}else{
	echo $conn->error;

}
 ?>
