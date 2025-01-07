<?php
require("../lib/connection.php");
require("../lib/function.php");
session_start();
$sq = "select * from forms where id = $_GET[id]";
$res = $conn->query($sq);
$r = $res->fetch_array();
?>

<div class="row">
	<div style="margin: auto;" class="col-md-8">
		<div class="ibox">
			<div class="ibox-head">
				<div class="ibox-title"> <?php  echo $r['name'] ?> </div>
			</div>
			<div class="ibox-body">
				<form method="post" class="form_data" action="<?php echo $r['form_action']?>">
					<input type="Hidden" name="sp" value="<?php echo $r['sp']?>">
					<?php
					require("../lib/connection.php");
					$sql = "select * from form_input where form_id = $_GET[id]";
					$ress = $conn->query($sql);
					while ($row = $ress->fetch_array()) {
						extract($row);
						if($type == "dropdown"){
							?>
								<div class="form-group">
						<label><?php echo $lable ?></label>

						<select  name="<?php echo $name ?>" class="form-control">
							<option selected disabled>
								choose one</option>
							<?php get_dropdown($action) ?>
						</select>
					</div>
							<?php
						} 
						else{

					?> 
					<div class="form-group">
						<label><?php echo $lable ?></label>
						<input type="<?php echo $type ?>" name="<?php echo $name ?>" class="form-control" placeholder="<?php echo $placeholder ?>" > 
					</div>
<?php
}
}
?>
<input type="submit" value="<?php echo $r['button'] ?>" class="btn btn-primary btn-block">
				</form>
				<div style="margin-top: 5px;"></div>
			</div>
		</div>
	</div>
</div>
</div>
</div>