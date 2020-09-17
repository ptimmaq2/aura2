<h3 class="title txt">Ban a user</h3>
 <?php 
		if($_SESSION['user']['rank'] >= 7){
		if($_POST['add_ban']){
			$bantype = mysql_real_escape_string($_POST['bantype']);
			$value = mysql_real_escape_string($_POST['value']);
			$reason = mysql_real_escape_string($_POST['reason']);
			$expire = strtotime($_POST['expire']);
			
			if(empty($value)){
				echo '<div class = "alert">You have not entered a username or IP?</div><br>';
			}
				
			else if(empty($reason)){
				echo '<div id = "error-message">You have not entered a reason?</div><br>';
			}
			
			else if(empty($expire)){
				echo '<div id = "error-message">You have not chosen an expiry date?</div><br>';
			}
			
			else{	
				$banlog = "INSERT INTO hk_logs (type, time, who_done) VALUES('Create Ban(" . $bantype .  ' - ' . $value .")','". time() ."','{$_SESSION['user']['username']}')";
				$query = "INSERT INTO bans SET bantype='{$bantype}', value='{$value}', reason='{$reason}', expire = '". $expire ."', added_by = '" . $_SESSION['user']['username'] . "', added_date = '". time() ."'";
				mysql_query($query) or die ("Error in query: {$logtest}. ".mysql_error());
				mysql_query($banlog);
				echo '<div id = "sucess-message">Ban added successfully.<meta http-equiv="refresh" content="3;url={url}/index.php?url=hk&create_bans"/></div><br>';
			}
		}
?>
		<script type="text/javascript">
		  document.getElementById('date').value = Date();
		</script>
		<form method = "post">
		<div class="input-div">
			<select name = "bantype">
			  <option value="user">User Ban</option>
			  <option value="ip">IP Ban</option>
			</select></div><br>
			<div class="input-div">
			<b>Username/IP: </b><br><input type = "text" value = "<?php echo $_POST['value']; ?>" name = "value"><br>
			</div>
			<div class="input-div">
			<b>Reason:</b><br><input type = "text" value = "<?php echo $_POST['reason']; ?>" name = "reason"><br>
			</div>
			<div class="input-div">
			<b>Expiry Date: </b><br><input id = "date" value = "<?php echo $_POST['expire']; ?>" type = "date" name = "expire"><br>
			</div><br>
			<input class="form" type = "submit" name = "add_ban"><br>
		</form>
		
		<?php } else{die('Go away, this is for admins not noobs.');} ?>