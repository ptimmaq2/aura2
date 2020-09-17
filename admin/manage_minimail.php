 <h3 class="title txt">Manage Minimail</h3>
 <?php 
		if($_SESSION['user']['rank'] >= 7){
?>
		
		<table style="width:100%;">
		  <tr>
			
			<th >Sender</th>
			<th>Reciever</th>
			<th >Message</th>
		  </tr>
		<?php
			$q = mysql_query("SELECT * FROM user_messages");
				while ($m = mysql_fetch_array($q)) { 
			
			?>
		  <tr >
			
			<td ><?php echo $m['username']; ?></td>
			<td ><?php echo $m['user']; ?></td>
			<td ><?php echo $m['text']; ?></td>
		  </tr>
		  <?php } ?>
	  </table>
		<?php } else{die('Go away, this is for admins not noobs.');} ?>