<h3 class="title txt">Manage VIPS</h3>
 <?php 
		if($_SESSION['user']['rank'] >= 8){
?>
		
		<table style="width:100%">
		  <tr>
			<td>Username</th>
			<td >Rank</th>
			<td >IP</th>
			<td >Email</th>
			<td >Remove</th>
		  </tr>
		<?php
			$q = mysql_query("SELECT * FROM users WHERE rank = 2");
				while ($m = mysql_fetch_array($q)) { 
			
			?>
		  <tr>
			<td ><?php echo $m['username']; ?></td>
			<td ><?php echo $m['rank']; ?></td>
			<td ><?php echo $m['ip_last']; ?></td>
			<td ><?php echo $m['mail']; ?></td>
			<td ><a class="content"href = "{url}/index.php?url=hk&manage_vip&remove&username=<?php echo $m['username']; ?>">Remove</td>
		  </tr>
		  <?php } 
			if(isset($_GET['remove'])){
			$q_edituser = "INSERT INTO hk_logs (type, time, who_done) VALUES('Remove VIP(" . $_GET['username'] .")','". time() ."','{$_SESSION['user']['username']}')";

			mysql_query("UPDATE users SET rank = '1' WHERE username = '" . $_GET['username'] . "'");
			mysql_query($q_edituser);
			echo('<div id = "sucess-message">VIP removed successfully.<meta http-equiv="refresh" content="3;url={url}/index.php?url=hk&manage_vip"/></div>');
		
			}
		  ?>		</table>
		<?php } else{die('Go away, this is for admins not noobs.');} ?>