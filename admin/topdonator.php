 <h3 class="title txt">Add a a topdonator</h3>
 <?php 
		if($_SESSION['user']['rank'] >= 9){
?>
<div class="input-div">
		<table style="width:100%;">
		  <tr>
			<th>Username</th>
			<th >Rank</th>
			<th >IP</th>
			<th >Email</th>
			<th >Remove</th>
		  </tr>
		<?php
			$q = mysql_query("SELECT * FROM users WHERE topdonator = '1' ");
				while ($m = mysql_fetch_array($q)) { ?>
		  <tr>
			<td ><?php echo $m['username']; ?></td>
			<td ><?php echo $m['rank']; ?></td>
			<td ><?php echo $m['ip_last']; ?></td>
			<td ><?php echo $m['mail']; ?></td>
			<td ><a href = "{url}/index.php?url=hk&topdonator&remove&username=<?php echo $m['username']; ?>"><img src = "http://rehab-hotel.com/app/tpl/skins/Habbo/images/remove.png"></td>
		  </tr>
		  <?php } 
				if(isset($_GET['remove'])){
					$remove = "INSERT INTO hk_logs (type, time, who_done) VALUES('Remove Donator (" . $_GET['username'] .")','". time() ."','{$_SESSION['user']['username']}')";

					mysql_query("UPDATE users SET topdonator = '0' WHERE username = '" . $_GET['username'] . "'");
					mysql_query($remove);
					echo('<div class = "alert">User removed successfully.<meta http-equiv="refresh" content="3;url=http://rehab-hotel.com/index.php?url=hk&topdonator"/></div>');
				}
				if(isset($_GET['add'])){
				if($_SESSION['user']['rank'] >= 8){
				
				if ($_POST['submit']){
				if((empty($_POST['username']))){
					echo "<div class = 'alert'>You <b>MUST</b> enter a username.</div>";
				}
				else{
				$username = mysql_real_escape_string($_POST['username']);
				$add = "INSERT INTO hk_logs (type, time, who_done) VALUES('Added Donator (" . $username .")','". time() ."','{$_SESSION['user']['username']}')";

				mysql_query( "UPDATE users SET topdonator = '1' WHERE username = '{$username}'");
				mysql_query($add);
				echo "<div class = 'alert'>User added to list.</div><meta http-equiv=\"refresh\" content=\"3;url=http://rehab-hotel.com/index.php?url=hk&topdonator\"/>";
					}
				}
				$q = mysql_query("SELECT * FROM settings");
				$lol = mysql_fetch_assoc($q);
				echo '
				<div class="input-div">
				<br><form method = "post">
				<b>Username: </b><input type = "text" name = "username" placeholder = "Username"></br>
				</div>
				<div class="input-div">
				<input class="tooltip form" title="click here to add the user" type = "submit" name = "submit">
				</div>
				</form><br><br>';
				 }}
		  ?>
		</table></div>
		<div class="input-div">
		<a href = "{url}/index.php?url=hk&topdonator&add">
		<button>	Add a top donator!</button>
		</a></div>
		<?php } else{die('Go away, this is for admins not noobs.');} ?>