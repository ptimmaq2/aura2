				<h3 class="title txt">Change user password</h3>
				<?php 
					if ($_POST['change_pw']){

						$username = mysql_real_escape_string($_POST['username']);
						$password = mysql_real_escape_string($_POST['password']);
						$q_editn = "INSERT INTO hk_logs (type, time, who_done) VALUES('Change user password(" . $username .")','". time() ."','{$_SESSION['user']['username']}')";

						mysql_query( "UPDATE users SET password = '" . md5($password) ."' WHERE username = '{$username}'" );
						mysql_query($q_editn);
						echo '<div class = \'alert\'>Password changed successfully.</div><meta http-equiv="refresh" content="3;url=http://rehab-hotel.com/index.php?url=hk&change_password"/>';
					}?>
					<form method = "post">
					<input type = "text"  name = "username" placeholder = "Username"></br></br>
					<input type = "text" name = "password" placeholder = "Password"></br></br>
					<input class="form" value="Change password"type = "submit" name = "change_pw">
					</form>
