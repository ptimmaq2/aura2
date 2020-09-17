<h3 class="title txt">Manage Staffs</h3>
 <?php 
		if($_SESSION['user']['rank'] >= 9){
?>
		
		<table style="width:100%;">
		  <tr>
			<th>Username</th>
			<th >Rank</th>
			<th >IP</th>
			<th >Email</th>
			<th >Fire</th>
		  </tr>
		<?php
			$q = mysql_query("SELECT * FROM users WHERE rank >= 10");
				while ($m = mysql_fetch_array($q)) { ?>
		  <tr>
			<td ><?php echo $m['username']; ?></td>
			<td ><?php echo $m['rank']; ?></td>
			<td ><?php echo $m['ip_last']; ?></td>
			<td ><?php echo $m['mail']; ?></td>
			<td ><a href = "{url}/index.php?url=hk&manage_staff&fire&username=<?php echo $m['username']; ?>">Fire</td>
		  </tr>
		  <?php } 
				if(isset($_GET['fire'])){
				$qfires = "INSERT INTO hk_logs (type, time, who_done) VALUES('Fire " . $_GET['username'] ."','". time() ."','{$_SESSION['user']['username']}')";
				mysql_query("UPDATE users SET rank = '1' WHERE username = '" . $_GET['username'] . "'");
				mysql_query($qfires);
				echo('<div class = "alert">User fired successfully.<meta http-equiv="refresh" content="3;url=http://rehab-hotel.com/index.php?url=hk&manage_staff"/></div>');
			}
		  ?>
		</table>
		<?php } else{die('Go away, this is for admins not noobs.');} ?>