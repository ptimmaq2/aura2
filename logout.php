<?php
if(isset($_SESSION['user']['id']))
{
	session_destroy();
}

	header('Location: '.$_CONFIG['hotel']['url'].'/logout_ok');
	exit;

?>