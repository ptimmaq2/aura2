 <h3 class="title txt">Housekeeping logs</h3>
 <?php 
		if($_SESSION['user']['rank'] >= 6){
?>
		
		<table style="width:100%;">
		  <tr>
			<th>ID</th>
			<th >Type</th>
			<th>Time & Date</th>
			<th >Submitted by</th>
		  </tr>
		<?php
			$q = mysql_query("SELECT * FROM hk_logs");
				while ($m = mysql_fetch_array($q)) { 
			
			?>
		  <tr align = "center">
			<td ><?php echo $m['id']; ?></td>
			<td ><?php echo $m['type']; ?></td>
			<td ><?php echo date('F d, Y', $m['time']); ?></td>
			<td ><?php echo $m['who_done']; ?></td>
		  </tr>
		  <?php } ?>
	  </table>
		<?php } else{die('Go away, this is for admins not noobs.');} ?>