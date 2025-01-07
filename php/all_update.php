<?php 

require "../lib/connection.php";
$tablename= $_GET['table'];
$id= $_GET['id'];


$sql="select * from $tablename where id='$id'";
$ress=$conn->query($sql);
  
 // $col=$ress->fetch_fields();

while ($row=$ress->fetch_array()) {

	?>

 
<form class="form_data_update" action="php/updatesave.php" method="POST">
	<input type="" name="idd" value="<?php echo $row[0]; ?>" ><br>
	<label>Name</label>
<input type="text" name="name" value="<?php echo $row[1]; ?>" ><br>
<label>tell</label> 
<input type="text" name="tell" value="<?php echo $row[2]; ?>" ><br>
<label>address</label> 
<input type="text" name="add" value="<?php echo $row[3]; ?>" ><br>
<label>date</label> 
<input type="text" name="date" value="<?php echo $row[4]; ?>" > 
<br>	
<button type="submit" name="btnupdate">update</button>
<div class="response"></div>
</form>
 
	<?php 
}


 ?>
<style type="text/css">
	.form_data_update{
		background: orange;
		width: 80%;
		border: 1px solid;
		pad: 10px;
	}
</style>