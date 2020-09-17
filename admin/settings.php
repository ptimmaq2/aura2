<h3 class="title txt">Server settings</h3>
		<?php
		if($_SESSION['user']['rank'] >= 8){
		function sendMUS($header, $data){
				$ip = "127.0.0.1";
				$port = 30001;
				$musData = $header . chr(1) . $data;
				$sock = @socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
				@socket_connect($sock, $ip, $port);
				@socket_send($sock, $musData, strlen($musData), MSG_DONTROUTE);
				@socket_close($sock);
		}
		?>
			
			<?php 
			if ($_POST['submit']){
				if((empty($_POST['uotw']))){
					echo "<div class = 'alert'>You <b>MUST</b> enter a username.</div>";
				}
				else{
				$uotw = mysql_real_escape_string($_POST['uotw']);
				$hk_alert = mysql_real_escape_string($_POST['hk_alert']);
				$dashboard_content = mysql_real_escape_string($_POST['dashboard_content']);
				$q_su = "INSERT INTO hk_logs (type, time, who_done) VALUES('Settings Update','". time() ."','{$_SESSION['user']['username']}')";
				
				
				mysql_query( "UPDATE settings SET uotw = '{$uotw}', hk_alert = '{$hk_alert}', dashboard_content = '{$dashboard_content}' WHERE id = 1") or die(mysql_error());
				mysql_query($q_su);
				echo "<div class = 'alert'>Updated configuration.</div>";
				}
			}

			if($_POST['flush_hklog']){
				mysql_query("TRUNCATE table hk_logs");
				echo "<div class = 'alert'>Logs cleared successfully!</div>";
			}
			
			$q = mysql_query("SELECT * FROM settings");
			$lol = mysql_fetch_assoc($q);
			if($_POST['sec_sub']){
				$q_log = "INSERT INTO hk_logs (type, time, who_done) VALUES('Hotel Alert','". time() ."','{$_SESSION['user']['username']}')";
				sendMUS($_POST['mus_type'], $_POST['ha_data']);
				mysql_query($q_log);
			}
			?>
			<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
			<!-- Place inside the <head> of your HTML -->
			<script type="text/javascript">
			tinymce.init({
				selector: "textarea"
			 });
			 </script>		

		
			<form method = "post">
			<div class="input-div">
			<b>User of the week: </b></br><input type = "text" value = "<?php echo $lol['uotw']; ?>" name = "uotw" placeholder = "User of the week"></br></br>
			</div>
			<div class="input-div">
			<b>Your username:</b></br><input type = "text" value = "{username}" disabled></br></br>
			</div>
			<div class="input-div">
			<b>Staff Alert:</b></br><input type = "text" name = "hk_alert" value = "<?php echo$lol['hk_alert']; ?>"></br></br>	
			</div>
			<?php if(isset($_SESSION['user']['id']))
                  if(mysql_result(mysql_query("SELECT rank FROM users WHERE id = '" . $_SESSION['user']['id'] . "'"), 0) == 10){ 	?>
			<script type="text/javascript">
			function openboxlol(i) { document.getElementById(i).style.display ='inline'; }
			 </script>		
			<div id="thumb0" class = "dashboard" onclick="openboxlol('open')">Dashboard Editor</div>
			<div id="open" style="display: none"><textarea type = "text" name = "dashboard_content" rows="5"><?php echo $lol['dashboard_content']; ?></textarea></div></br>
			<?php } ?>
			<div class="input-div">
			<input class="form" type = "submit" name = "submit"></br></br>
			</div>
			<?php  if(isset($_SESSION['user']['id']))
                   if(mysql_result(mysql_query("SELECT rank FROM users WHERE id = '" . $_SESSION['user']['id'] . "'"), 0) == 10){ ?>
			<input type = "submit" name = "flush_hklog" value = "Clear HK log"><br><br>
			<?php } ?>
			</form><br><br>
			<div class="input-div">
			<b  style = "font-size:14px;">MUS Commands:</b></br>
			</div>
			<form method = "post">
			<div class="input-div">
				<select name = "mus_type">
					<option value = "ha">Hotel Alert</option>
				</select></br></div>
				<div class="input-div">
				<input type = "text" name = "ha_data" placeholder = "Hotel Alert Text"></br></br>
				</div>
				<div class="input-div">
				<input class="form" type = "submit" name = "sec_sub">
				</div>
			</form>
			<?php }
			else{
				die('Go away please.');
			}
			?>
