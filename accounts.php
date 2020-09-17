<?php
//i thought u said this way of connecting is old and noob? ._. I never said it was noob, I said it was old. is this exploit free etc ._. yes unless
//Yes unless someone can turn their IP into an exploitation tool... notHINg is impossible ;)  
// Thats the shit that makes me want to slap you... its impossible. there is no possible SQL hole here...#phpMASTER looool ur creepy... you still remember my pass...
//I saw it on like sunday when i was helping you.. oh i thought u have remembered that like 2 years lol no lol btw wanna see something, im rich motherfucker now
	$connect = mysql_connect("localhost", "root", "harrypotter7");
	mysql_select_db("hotel", $connect);
	$ip = $_SERVER["REMOTE_ADDR"];
	$query = mysql_query("SELECT * FROM `users` WHERE `ip_reg` = '$ip'");
	while($row = mysql_fetch_assoc($query))
	{
	
		echo $row["username"]."<br />";	
	}

?>