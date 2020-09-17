 <h3 class="title txt">Add dealer as trusted</h3>
 <?php 
		if($_SESSION['user']['rank'] >= 9){
?>

		<table style="width:100%;">
		  <tr>
			<th>Username</th>
			<th >Rank</th>
			<th >IP</th>
			<th >Email</th>
			<th >Remove</th>
		  </tr>
		<?php
			$q = mysql_query("SELECT * FROM users WHERE trustedd = '1' ");
				while ($m = mysql_fetch_array($q)) { ?>
		  <tr align = "center">
			<td ><?php echo $m['username']; ?></td>
			<td ><?php echo $m['rank']; ?></td>
			<td ><?php echo $m['ip_last']; ?></td>
			<td ><?php echo $m['mail']; ?></td>
			<td ><a href = "{url}/index.php?url=hk&trusteddealers&remove&username=<?php echo $m['username']; ?>"><img src = "http://rehab-hotel.com/app/tpl/skins/Habbo/images/remove.png"></td>
		  </tr>
		  <?php } 
				if(isset($_GET['remove'])){
					$remove = "INSERT INTO hk_logs (type, time, who_done) VALUES('Remove Trusted User (" . $_GET['username'] .")','". time() ."','{$_SESSION['user']['username']}')";
					mysql_query("UPDATE users SET trustedd = '0' WHERE username = '" . $_GET['username'] . "'");
					mysql_query($remove);
					echo('<div class = "alert">User removed successfully.<meta http-equiv="refresh" content="3;url=http://rehab-hotel.com/index.php?url=hk&trusteddealers"/></div>');
				}
				if(isset($_GET['add'])){
				if($_SESSION['user']['rank'] >= 8){
				
				if ($_POST['submit']){
				if((empty($_POST['username']))){
					echo "<div class = 'alert'>You <b>MUST</b> enter a username.</div>";
				}
				else{
				$username = mysql_real_escape_string($_POST['username']);
				$add = "INSERT INTO hk_logs (type, time, who_done) VALUES('Add Trusted User (" . $username .")','". time() ."','{$_SESSION['user']['username']}')";

				mysql_query( "UPDATE users SET trustedd = '1' WHERE username = '{$username}'");
				mysql_query($add);
				echo "<div class = 'alert'>This has been updated.<meta http-equiv=\"refresh\" content=\"3;url=http://rehab-hotel.com/index.php?url=hk&trusteddealers\"/></div>";
				}
				}
				
				$q = mysql_query("SELECT * FROM settings");
				$lol = mysql_fetch_assoc($q);
				
				echo '<div class="input-div"><br><form method = "post">
					<b>Username: </b><input type = "text" name = "username" placeholder = "Username"></br>
					</div>
					<div class="input-div">
					<input class="form" type = "submit" name = "submit">
					</div>
					</form>';
				}}
		  ?>
		</table>
		<div class="input div">
		<a href = "{url}/index.php?url=hk&trusteddealers&add">
		<button>	Add a trusted user!</button>
		</div>
		</a>
		<?php } else{die('Go away, this is for admins not noobs.');} ?>