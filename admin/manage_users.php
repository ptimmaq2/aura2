<h3 class="title txt">Manage Users</h3>
	<?php 
		$q_edituser = "INSERT INTO hk_logs (type, time, who_done) VALUES('Edit user(" . $_POST['username_current'] .")','". time() ."','{$_SESSION['user']['username']}')";
		if($_SESSION['user']['rank'] >= 8){
		if(isset($_POST['update']))
		{
			mysql_query($q_edituser);
			mysql_query("UPDATE users SET motto = '" . filter($_POST['motto']) . "', rank = '" . filter($_POST['rank']) . "', credits = '" . filter($_POST['credits']) . "', activity_points = '" . filter($_POST['pixels']) . "' WHERE username = '" . filter($_POST['username_current']) . "'") or die(mysql_error());
		   echo "<div class = \"alert\">" . $_POST['username_current'] . "'s account updated.</div>"; 
		}

		if(isset($_POST['lookup']))
		{	
		if(mysql_num_rows(mysql_query("SELECT * FROM users WHERE username = '". filter($_POST['l_username']) ."'")) == 0) { echo "User does not exist."; }
		else { 
		$two = mysql_fetch_assoc(mysql_query("SELECT * FROM users WHERE username = '" . filter($_POST['l_username']) . "'"));
	?>

	
	<form method='post'>
	
	<input type="hidden" name="username_current" value="<?php echo $_POST['l_username']; ?>" />
	
		
				
			
				<div class="input-div">
				Editing account: <?php echo $username; ?></a>
				<input type="text" value="<?php echo $_POST['l_username']; ?>" style="width: 95%" disabled />
			</div>
			<div class="input-div">
				<p>Email</p>
				<input type="text" value="<?php echo $two['mail']; ?>" style="width: 95%" disabled />
			</div>
			<div class="input-div">
				Motto
				<input type="text" name="motto" value="<?php echo $two['motto']; ?>" style="width: 95%" />
			</div>
			<div class="input-div">
				Rank
				<input type="text" name="rank" value="<?php echo $two['rank']; ?>" style="width: 95%" disabled/>
			</div>
			<div class="input-div">
				Credits
				<input type="text" name="credits" value="<?php echo $two['credits']; ?>" style="width: 95%" />
			</div>
			<div class="input-div">
				Pixels
				<input type="text" name="pixels" value="<?php echo $two['activity_points']; ?>" style="width: 95%" />
			</div>
		<div class="input-div">
		<input class="form" type="submit" value="Update this account" name="update"/>
		</div>
	</form>
	<br />
	<?php
	}
	}
	?>
	<form method='post'>
	Username <br /> <input type="text" name="l_username" /> <br /> <br />
	<input type="submit" class="form" value="  Lookup user  " name="lookup"/>
	</form>
<?php } else{die('Go away, this is for admins not noobs.');}