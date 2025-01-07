<?php
session_start();
require("connection.php");
extract($_POST);
$sql = "call login_sp('$Username', '$password')";
$ress = $conn->query($sql);
$r = $ress->fetch_array();
if ($r["error"]){
	header("location: ../index.php?msg=$r[0]");
}
else{
	foreach ($r as $name => $val) {
		$_SESSION[$name]	=$val;
	}
	header("location: ../Home.php");
}
?>
