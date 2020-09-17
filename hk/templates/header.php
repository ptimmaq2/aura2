<?php 
if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) { $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP']; }

if (!isset($_SESSION['user']['id']) || $_SESSION['user']['rank'] < 5)
{
	header("Location: index.php?url=permissions");
	die();
}
elseif (isset($_SESSION['user']['id']) || $_SESSION['user']['rank'] >= 5)
{
	$getUseRank4Page = mysql_fetch_assoc(mysql_query("SELECT * FROM `users` WHERE `id` = '".$_SESSION['user']['id']."'"));
	if ($pagerank > $getUseRank4Page['rank']) 
	{ 
		header("Location: index.php?url=permissions");
		die();
	}
}

function Mus($header, $data = '')
{
	$musData = $header . chr(1) . $data;
	$sock = @socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
	
	@socket_connect($sock, "127.0.0.1", "30001");
	@socket_send($sock, $musData, strlen($musData), MSG_DONTROUTE);    
	@socket_close($sock);
}
?>
<div id="main">
	<div id="header">
		<div id="logo">
			<div id="logo_text"><h1>ASE</h1></div>
		</div>
	</div>