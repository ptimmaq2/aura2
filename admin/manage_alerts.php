 <?php 
		if($_SESSION['user']['rank'] >= 9){
?>
		<h3 class="title txt">Manage Alerts</h3>
		<table style="width:100%;">
		  <tr>
			<th >ID</th>
			<th style = "width:180px;">Text</th>
			<th >Enabled</th>
			<th >Type</th>
			<th >Remove</th>
		  </tr>
		<?php
			$q = mysql_query("SELECT * FROM site_alerts");
				while ($m = mysql_fetch_array($q)) { ?>
		  <tr align = "center">
			<td ><?php echo $m['id']; ?></td>
			<td ><?php echo $m['alert']; ?></td>
			<td ><?php echo $m['enabled']; ?></td>
			<td ><?php echo $m['type']; ?></td>
			<td ><a href = "{url}/index.php?url=hk&manage_alerts&remove&id=<?php echo $m['id']; ?>"><img src = "{url}/app/tpl/skins/{skin}/images/removeb.png"></td>
		 </tr>
		  <?php } 
				if(isset($_GET['remove'])){
					$removealert = "INSERT INTO hk_logs (type, time, who_done) VALUES('Remove Alert (" . $_GET['id'] .")','". time() ."','{$_SESSION['user']['username']}')";
					mysql_query("DELETE FROM site_alerts WHERE id = '" . $_GET['id'] ."'");
					mysql_query($removealert);
					echo('<div class = "alert">Alert Deleted successfully.<meta http-equiv="refresh" content="3;url=http://rehab-hotel.com/index.php?url=hk&manage_alerts"/></div>');
				}
		  ?>
		</table>
		<?php } else{die('Go away, this is for admins not noobs.');} ?>