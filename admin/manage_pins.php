<h3 class="title txt">Manage Pins</h3>
 <?php 
		if($_SESSION['user']['rank'] >= 9){
?>

		<table style="width:100%;">
		  <tr>
			<th >Username</th>
			<th >Pin</th>
			<th>Email</th>
			<th >Locked</th>
			<th >Change</th>
			<th>Unlock</th>
		  </tr>
		<?php
			$q = mysql_query("SELECT * FROM users WHERE rank >= 10");
				while ($m = mysql_fetch_array($q)) { ?>
		  <tr align = "center">
			<td ><?php echo $m['username']; ?></td>
			<td ><?php echo substr($m['staff_pin'],0, -26) . '**' ?></td>
			<td><?php echo substr($m['mail'], 0, -8) . '**'; ?></td>
			<td ><?php if($m['account_locked'] == 0){echo 'No';}else{echo 'Yes';} ?></td>
			<td ><a href = "{url}/index.php?url=hk&manage_pins&change&username=<?php echo $m['username']; ?>">Change </td>
			<?php if($m['account_locked'] == 1){ ?><td ><a href = "{url}/index.php?url=hk&manage_pins&unlock&username=<?php echo $m['username']; ?>">Unlock </td><?php } else{echo '<td size = "7">Not Locked</td>';}?>
		  </tr>
		  <?php } 
				function RandomKey() {
					$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
					$pass = array(); //remember to declare $pass as an array
					$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
					for ($i = 0; $i < 32; $i++) {
						$n = rand(0, $alphaLength);
						$pass[] = $alphabet[$n];
					}
					return implode($pass); //turn the array into a string
				}
				
				if(isset($_GET['change'])){
					if ($_POST['change_pin']){

						$staff_pin = mysql_real_escape_string($_POST['staff_pin']);
						$q_editn = "INSERT INTO hk_logs (type, time, who_done) VALUES('Change pin(" . $title .")','". time() ."','{$_SESSION['user']['username']}')";

						mysql_query( "UPDATE users SET staff_pin = '" . md5($staff_pin) ."' WHERE username = '". $_GET['username'] ."'" );
						mysql_query($q_editn);
						echo '<div class = \'alert\'>Pin changed successfully.</div><meta http-equiv="refresh" content="3;url=http://rehab-hotel.com/index.php?url=hk&manage_pins"/>';
					}
					echo '<form method = "post">
					<input type = "text" value = "'. $_GET['username'] .'" disabled><br>
					<input type = "text" class = "lol" name = "staff_pin" placeholder = "New Pin" value = "' . RandomKey() .'"></br>
					<input type = "submit" name = "change_pin">
					</form>
					';
				}
				if(isset($_GET['unlock'])){
						mysql_query( "UPDATE users SET account_locked = '0' WHERE username = '". $_GET['username'] ."'" );
						echo '<div class = \'alert\'>Account unlocked successfully.<meta http-equiv="refresh" content="3;url=http://rehab-hotel.com/index.php?url=hk&manage_pins"/></div>';
				}
		  ?>
		</table>
		<?php } else{die('Go away, this is for admins not noobs.');} ?>