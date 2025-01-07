 <?php 
function get_company($col){

	require("connection.php");
	$sql = "select $col from company_info";
	$ress = $conn->query($sql);
	$r = $ress->fetch_array();
	return $r[0];
}

function gen_sql($post){
	$sql = "call ";
	$input = count($post);
	$i =0;
	foreach ($post as  $val) {
		$i++;
		if ($i == 1) {
			$sql .= $val."(";
		}elseif ($i==$input) {
			$sql .="'".$val."')";
		}else{
			$sql .="'".$val."',";
		}
	}
	return $sql;
}

function get_dropdown($action){
require("connection.php");
$sql = "call get_dropdown_sp('$action')";
$ress = $conn->query($sql);
if($ress->num_rows > 0 ){
while($row = $ress->fetch_array()){
	?>
<option value="<?php echo $row[0] ?>" ><?php echo $row[1] ?></option>;
	
	<?php
}
}
else{

	 echo "<option>No Records to displadown and add action </option>";

}

}

function table_row($ress){
	$col = $ress->fetch_fields();
	?>
	<thead>
		<tr>
			<?php 
			foreach ($col as $key ) {
				?>
				<th><?php echo $key->name ?></th>
				<?php
			}
			 ?>
		</tr>
	</thead>
<tbody>
	<?php
while($row = $ress->fetch_assoc()){
	?>
	<tr>
		<?php 
foreach ($row as $key => $val) {
	?>
	<td><?php echo $val ?></td>
	<?php
}
		 ?>
	</tr>
	<?php
}
?>
</tbody>
<?php
}
?>
  