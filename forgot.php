<?php
error_reporting (E_ALL ^ E_NOTICE);
session_start();
$userid = $_SESSION['id'];
$username = $_SESSION['username'];
<?
	<title>Forgot your password? - Password recovery</title>
	
	<?php

	//First time really doing some function to cms in php so if this doesn't work don't be mad at me.

	if (!$username && !$userid) {

		if ($_POST['resetbtn']) {
		
		}
		
		
		echo "<form action='./forgot.php'>   
		<table>
		<tr>
			<td>Username:</td>
			<td><input type='text' name='user' /></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type='text' name='email' /></td>
		</tr>
		<tr>
			<td></td>
			<td><input type='submit' name='resetbtn' value='Reset Password' /> </td>
		</tr>
		</table>
		</form>";
	}
	else
		echo "Please logout to access this page. This is a password recovery page.";

	<?