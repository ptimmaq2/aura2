<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Babux - Privacy Settings</title>
	
<!-- REMINDER TO MYSELF: Using Habbo's style folder, so if habbo goes down, need to use other style folder or rip theirs -->

    <script>
        var andSoItBegins = (new Date()).getTime();
        var habboPageInitQueue = [];
        var habboSecureServerRoot = "https://www.habbo.com";
        var habboStaticFilePath = "https://habboo-a.akamaihd.net/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/2543/web-gallery";
    </script>
<?php include 'includes/style.php';?>

<?php include 'includes/navigation.php';?>
            <div class="navigation">
                <ul>
                        <li>
					
                            <a href="{url}/me"><span class="head"></span> Me</a>
                            <span></span>
                        </li>
                        <li>
                            <a href="{url}/community"><span class="community"></span> Community</a>
                            <span></span>
                        </li>
						 <li>
                            <a href="{url}/news"><span class="articles"></span> News</a>
                            <span></span>
                        </li>
						<li> <li class="selected">
                            <a href="{url}/settings"><span class="safety"></span> Settings</a>
                            <span></span>
                        </li>
						<li>
                            <a href="{url}/store"><span class="credits"></span> Store</a>
                            <span></span>
                        </li>
                    
                </ul>
            </div>
    </div>
</header>
<div id="content">
                <div class="sub-navigation">
                    <ul>
                
                            <li class="selected">
                               Settings                       
                            </li>
                    </ul>
                </div>
  <div id="page-content">
        <section id="upper-content-left"> <div class="builders subscription-management" >
   <center> <h2> Settings </h2></center>
  
	  </br>
	 
		 
			 
                                    <div class="box-content">
									<?PHP
									
									if(isset($_POST['update'])) { 
									$bf=$_POST['bf'];
									$os=$_POST['os']; 
									$fm=$_POST['fm'];
									$am=$_POST['am'];
									$user=$_POST['user'];
									switch ($bf){	
									case "":
										mysql_query("UPDATE users SET motto='$am', block_newfriends='1', hide_online='$os', hide_inroom='$fm' WHERE username='$user'") or die(mysql_error()); 
										break;	
									case "2":
										mysql_query("UPDATE users SET motto='$am', block_newfriends='0', hide_online='$os', hide_inroom='$fm' WHERE username='$user'") or die(mysql_error()); 
										break;
}
									
									

									echo '<div class="rounded-container">';
									include("includes/greenbox1.php");
									echo '<div class="rounded-green rounded-done">';
									echo '<b>Profile is updated!</b><br>';
									echo '</div>';
									include("includes/greenbox2.php");
									echo '</div>';
									}
									?>
											<form method="post">
											<input type="hidden" name="user" value="{username}" />
                                            <h3>Your motto</h3>
                                            <p>Your motto is what other users will see when clicking your user in the Hotel.</p>
                                            <p><label>Motto: <input type="text" name="am" size="32" maxlength="32" value="{motto}" style="border-radius:6px;"></label></p>
											
											<?php
											$query = "SELECT * FROM users WHERE id = '".$_SESSION['user']['id']."'";
											$result = mysql_query($query);
											$row = mysql_fetch_array($result);
											$x1 = $row['block_newfriends'];
											$x2 = $row['hide_online'];
											$x3 = $row['hide_inroom'];
											$ch1[$x1] = "checked";
											$ch2[$x2] = "checked";
											$ch3[$x3] = "checked";
											echo "
											<h3>Friend request</h3>";
											if ( $x1 = '1' ) {
											echo "<input type='checkbox' name='bf' value='2' ".$ch1['0'].">Friend Request visible:";
											} else {
											echo "<input type='checkbox' name='bf' value='1' ".$ch1['1'].">Friend Request visible:";
											}
											echo "<br><br>
											";
											
											echo "
											<h3>Online status</h3>
											<p>Choose who can see your online status:</p>
											<input type='radio' name='os' value='1' ".$ch2['1'].">No
											<input type='radio' name='os' value='0' ".$ch2['0'].">All
											<br><br>
											";
											
											echo "
											<h3>Follow me</h3>
											<p>Choose who gets to follow you from room to room:</p>
											<input type='radio' name='fm' value='1' ".$ch3['1'].">No
											<input type='radio' name='fm' value='0' ".$ch3['0'].">My Friends
											";
											

											?>
						</br>
                                            <div class="settings-buttons">
                                             <input type="submit" value="Save changes" name="account" class="confirm-button" style="margin-right: 20px;float:right;"></br></br>
                                            </div>
                                        </form></section>
										 <section id="upper-content-right">
				<div class="builders subscription-management" >
				<center> <h2 class="title">Change your profile</h2></center>
                                    <div class="box-content">
                                        <form method="post" id="profileForm">
                                            <h3>Your email address</h3>
                                            <p>Your email address is what you may need to reset your password incase you forget it.</p>
                                            <p><label>Email: <input type="text" name="acc_email" size="32" value="{email}" id="avatarmotto"></p>
                                            <h3>Current Password</h3>
                                            <p>Your current password is the password you use to login to the main website. Only fill this in if you wish to change your login password.</p>
                                            <p><label>Password: <input type="password" name="acc_old_password" value="" id="avatarmotto" style="border-radius:6px;"></p>
                                            <h3>New Password</h3>
                                            <p>Please only change this field if you wish to change your login password.</p>
                                            <p><label>New Password: <input type="password" name="acc_new_password" value="" id="avatarmotto" style="border-radius:6px;"></p>
                                            <div class="settings-buttons">
                                                <input type="submit" value="Save changes" name="account" class="confirm-button" style="margin-right: 20px;float:right;"></br></br>
                                            </div>
                                        </form></section>

       
                                    </div>
 
                <script type="text/javascript">
                    document.observe('dom:loaded', function() {
                        CurrentRoomEvents.init();
                    });
                </script>
            </div>
            <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
            <script type="text/javascript">
                HabboView.run();
            </script>
</div>
		<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]--> 

      <?php include_once('includes/footer.php'); ?>         
	  </body>