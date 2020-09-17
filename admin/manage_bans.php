<h3 class="title txt">Manage bans</h3>
 <?php 
		if($_SESSION['user']['rank'] >= 9){
?>
		
		<table style="width:100%;">
		 
			<th style = "width:50px;">Ban Type</th>
			<th >Username/IP</th>
			<th style = "width:100px;">Reason</th>
			<th >Added date</th>
			<th >Expiry date</th>
			<th >Added By</th>
			<th >Del</th>
		  </tr>
		<?php
			$q = mysql_query("SELECT * FROM bans");
				while ($m = mysql_fetch_array($q)) { ?>
		  <tr align = "center">
			<td ><?php echo ucwords($m['bantype']); ?></td>
			<td><?php echo chunk_split($m['value'],8); ?></td>
			<td ><?php echo $m['reason']; ?></td>
			<td ><?php echo $m['added_date']; ?></td>
			<td ><?php echo date("Y-m-d",$m['expire']); ?></td>
			<td ><?php echo $m['added_by']; ?></td>
			<td ><a href = "{url}/index.php?url=hk&manage_bans&remove&id=<?php echo $m['id']; ?>"><img src = "{url}/app/tpl/skins/{skin}/images/removeb.png"></td>
		 </tr>
		  <?php } 
				// Remove Ban
				if(isset($_GET['remove'])){
					$removeban = "INSERT INTO hk_logs (type, time, who_done) VALUES('Remove Ban (" . $_GET['id'] .")','". time() ."','{$_SESSION['user']['username']}')";
					mysql_query("DELETE FROM bans WHERE id = '" . $_GET['id'] ."'");
					mysql_query($removeban);
					echo('<div class = "alert">Ban Deleted successfully.<meta http-equiv="refresh" content="3;url=http://rehab-hotel.com/index.php?url=hk&manage_bans"/></div>');
				}
		  ?>
		</table>
		<?php } else{die('Go away, this is for admins not noobs.');} ?>