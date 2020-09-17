<?php 
if($_SESSION['user']['rank'] >= 5){
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title>{hotelName} - Controll Panel</title>
<meta http-equiv="Default-Style" content="defualt">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<?php require('extra/head/csslinks.php'); ?>
<?php require('extra/head/javascriptlinks.php'); ?>

</head>
<body onload="set_style_from_cookie()">

<?php include_once('extra/header_menu.php'); ?>

<section id="wrapper">
<div id="wrap-holder">
<div class="grid_1">
<div class="box">

<?php 	
									if(basename($_SERVER["REQUEST_URI"]) == 'hk'){ ?>
<h3 class="title txt">Welcome back , {username}</h3>
<img src="/app/tpl/skins/Project Habbo/images/news/figure(32).png" class="tooltip shadow" title="You're going to be fired if not using the housekeeping properly" align="right">
<p>Welcome to Housekeeping. This service is monitored closely, with 24 hour IP Address records being taken.</p><br>
<p>This service is meant for Staff use only. The service is monitored closely and we will pursue and ban any unauthorised users.</p><br>
<p>Staffs that use the controll panel wrong , will be fierd immidiatley without warning!</p>
<br>
<br>Remember some of the features here don't work yet! If you aren't sure if something works, ask me! Using some of those atm could corrupt the database. -ptimmaq2<br>
<p>- With friendly regards , the owners of {hotelname}</p>
<?php }
											
											// News
											if(isset($_GET['create_news'])) require_once 'admin/news_create.php';
											if(isset($_GET['manage_news'])) require_once 'admin/news_manage.php';
											if(isset($_GET['edit_news'])) require_once 'admin/news_edit.php';
											
											// User Editing
											if(isset($_GET['edit_users'])) require_once 'admin/manage_users.php';
											if(isset($_GET['manage_vip'])) require_once 'admin/manage_vip.php';
											if(isset($_GET['manage_bans'])) require_once 'admin/manage_bans.php';
											if(isset($_GET['create_bans'])) require_once 'admin/create_bans.php';
											
											if(isset($_GET['trusteddealers'])) require_once 'admin/trusteddealers.php';
											if(isset($_GET['topdonator'])) require_once 'admin/topdonator.php';
											if(isset($_GET['change_password'])) require_once 'admin/user_passwords.php';
											
											// Staff Stuff
											if(isset($_GET['manage_staff'])) require_once 'admin/manage_staff.php';
											if(isset($_GET['manage_pins'])) require_once 'admin/manage_pins.php';

											// Other Stuff
											if(isset($_GET['manage_alerts'])) require_once 'admin/manage_alerts.php';
											if(isset($_GET['manage_minimail'])) require_once 'admin/manage_minimail.php';
											if(isset($_GET['settings'])) require_once 'admin/settings.php';
											if(isset($_GET['hklogs'])) require_once 'admin/hklogging.php';
											if(isset($_GET['view_chatlogs'])) require_once 'admin/view_chatlogs.php';
									?>
</div>
</div>


<?php require('extra/hk.php'); ?>



</section></div>
<br>
<br><br>
<br><br><br><br>

<?php require('extra/footer.php'); ?>
</body>
</html>
<?php } else {die('You are not allowed to be here, sorry.');}?>