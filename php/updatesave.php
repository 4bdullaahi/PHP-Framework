
 <?php 
require "../lib/connection.php";
if(isset($_POST['btnupdate'])){
	$idd=$_POST['idd'];

$name=$_POST['name'];
$tell=$_POST['tell'];
$address=$_POST['add'];
$date=$_POST['date'];

$sql2="update branch set name='$name' , tell='$tell',address= '$address',date='$date' where id='$idd'   ";
echo $sql2;
$ress=$conn->query($sql2);
if ($ress) {
	echo "update sucessfully";
	// code...
}else{
	echo $conn->error;
}
}

  ?>