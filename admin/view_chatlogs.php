<h3 class="title txt">View chatlogs</h3>
<?php
	$q = mysql_query("SELECT * FROM cmdlogs")or die(mysql_error());
	$r = 80; //Results per page
	$p = ((isset($_GET['p'])) ? ($_GET['p']-1) : 0);
	
	$f = mysql_query("SELECT * FROM cmdlogs WHERE id >= ($p*$r) LIMIT {$r}")or die(mysql_error());
	
	echo '
		<table>
		<tr>
			<th>ID</th>
			<th>User ID</th>
			<th>Username</th>
			<th>Command</th>
			<th>Extradata</th>
			<th>Time</th>
		</tr>
	';
	while($row = mysql_fetch_array($f)) { ?>
		<tr>
			<td ><?php echo $row['id']; ?></td>
			<td ><?php echo $row['user_id']; ?></td>
			<td ><?php echo $row['user_name']; ?></td>
			<td ><?php echo $row['command']; ?></td>
			<td ><?php echo $row['extra_data']; ?></td>
			<td ><?php echo date("Y-m-d", $row['timestamp']); ?></td>
		</tr>
	<?php }
	echo '</table>';
	$previous = $_GET['p'] - '1';
	$next = $_GET['p'] + '1';
	echo "<a href=\"{$_CONFIG['hotel']['url']}/index.php?url=hk&view_chatlogs&p=" . $previous . "\">Previous</a> - ";
	echo "<a href=\"{$_CONFIG['hotel']['url']}/index.php?url=hk&view_chatlogs&p=" . $next . "\">Next</a><br>";
	
	for($i=1;
	$i < round(mysql_num_rows($q)/($r) + 1.5); $i++) {
		echo "<a href=\"{$_CONFIG['hotel']['url']}/index.php?url=hk&view_chatlogs&p={$i}\">{$i}</a> ";
	}
?>