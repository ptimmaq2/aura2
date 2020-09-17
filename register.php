 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Babux - Register</title>
	
<!-- REMINDER TO MYSELF: Using Habbo's style folder, so if habbo goes down, need to use other style folder or rip theirs -->

    <script>
        var andSoItBegins = (new Date()).getTime();
        var habboPageInitQueue = [];
        var habboSecureServerRoot = "https://www.habbo.com";
        var habboStaticFilePath = "https://habboo-a.akamaihd.net/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/2543/web-gallery";
    </script>
    <link rel="shortcut icon" href="{url}/app/tpl/skins/custom-habbo/static/images/favicon.gif" type="image/vnd.microsoft.icon" />

    <link href='//fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic|Ubuntu+Condensed' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="{url}/app/tpl/skins/aura/css/frontpage.css" type="text/css" />
 <script type="text/javascript" src="{url}/app/tpl/skins/{skin}/js/libs2.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/{skin}/js/visual.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/{skin}/js/libs.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/{skin}/js/common.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/{skin}/js/fullcontent.js"></script>
		<script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/lightweightmepage.js"></script>

<script src="{url}/images/web-gallery/static/js/v3_landing_top.js" type="text/javascript"></script>

        <meta name="description" content="Check into the world's largest virtual hotel for FREE! Meet and make friends, play games, chat with others, create your avatar, design rooms and more! Just like Habbo but FREE!" />
        <meta name="keywords" content="habbo hotel, virtual, world, social network, free, community, avatar, chat, online, teen, roleplaying, join, social, groups, forums, safe, play, games, online, friends, teens, rares, rare furni, collecting, create, collect, connect, furni, furniture, pets, room design, sharing, expression, badges, hangout, music, celebrity, celebrity visits, celebrities, mmo, mmorpg, massively multiplayer" />

<script src="//cdn.optimizely.com/js/13389159.js"></script>
    <meta name="build" content="63-BUILD3038 - 14.05.2014 10:13 - com" />

<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<link rel="stylesheet" href="{url}/app/tpl/skins/aura/css/v3_creditflow.css" type="text/css" />
</head>
<body  style="overflow:hidden;">


<div id="overlay"></div>
<header>
    <div id="border-left"></div>
    <div id="border-right"></div>
</div>

<?php if(isset($template->form->error)) { ?>
                    <div id="loginerrorfieldwrapper">
                        <div id="loginerrorfield">
                            <div><?php echo $template->form->error; ?></div>
                        </div>
                    </div>
                <?php } ?>

    <div id="header-content">
    </br>     <img src="{url}/app/tpl/skins/aura/images/logo.png" <img style="margin-left: 20px; <div align="left" style="color: #FA0000;margin-top: 35px;margin-left: 180px">&nbsp;&nbsp;&nbsp;&nbsp;  {online} User(s) Online  & 					<?php $query = mysql_query("SELECT COUNT(*) AS aantalleden FROM users") or die(mysql_error()); $data = mysql_fetch_assoc($query); echo $data['aantalleden']; ?>
</b> Registered! - Join the fun!</b>    
    </div>
    <div id="top-bar-triangle"></div>
    <div id="top-bar-triangle-border"></div>
</header>
<style></style>
  <div id="page-content" style="position:absolute;top:20%">  
        <section id="upper-content">
    <section id="upper-content-left">
<!--	<h2><font color="white"> {hotelname} - Why not to join? It only takes a second!</font></h2>-->
        <h5 class="subscription-header"></h5>
		 <div class="reg-content-box" style="padding:20px;">
		
   <form method="post" id="phase-0-form">
		<input type="text" name="reg_username" placeholder="Username"class="login-field" style="padding:5px;box-shadow:3px 3px 5px black;width:250px;border-radius:6px;"/>
		<H5>Your avatar's username.</h5>
		<input type="text" name="reg_email" placeholder="Email" class="login-field" style="padding:5px;box-shadow:3px 3px 5px black;width:250px;border-radius:6px;"/>
		<h5> This is used to login and manage your avatars. </h5>
		<div id="upper-content-right" style="margin-left:300px;margin-top:-140px;">
		<input type="password" name="reg_password" placeholder="Password" class="login-field" style="padding:5px;box-shadow:3px 3px 5px black;width:250px;border-radius:6px;"/>
		<h5>Your account's password.</h5>
		<input type="password" name="reg_rep_password" placeholder="Repeat Password" class="login-field" style="padding:5px;box-shadow:3px 3px 5px black;width:250px;border-radius:6px;"/>
		<h5> Just to be sure... </h5>
	<!--	<input type="radio" name="reg_gender"><input type="radio" name="reg_gender" value="">-->
		<input type="submit" name="register" class="confirm-button" style="margin-left: -70px;"/>
        </form>
	<!--	<a href="{url}/index"><button style="margin-right: 0px;" class="signout-red-button">Cancel</button></a>-->
		
		
		
		<p align="left">
<h5>The register will redict to the index, then just login with the account you just made!</h5>		
</p>
		</section>
		</section>
		</div>
		<img style="margin-left:500px;margin-top:-10px;"src="{url}/app/tpl/skins/aura/habboweb/hotel.png"/>

<footer>
    <div id="age-recommendation"></div>

    <div id="footer-content">
        <div id="footer"><a href="{url}/whatisbabux">What's Babux?</a> /<a href="{url}/rules">Rules</a> /<a href="{url}/refund">Refund Policy</a> / <a href="{url}/tos" target="_new">Terms of Service</a> / <a href="{url}/dis" target="_new">Disclaimer</a> / <a href="{url}/safety" target="_new">Safety</a> / <a href="{url}/infringements">Infringements</a></div>
        <div id="copyright">
  <br/>   </br><b> </b></br></div>
    </div><p align="right"> <img src="{url}/app/tpl/skins/{skin}/img/B.png"> <img style="margin-right: 20px;">
    </div>
</footer>


<script src="{url}/images/web-gallery/static/js/v3_landing_bottom.js" type="text/javascript"></script>
<!--[if IE]><script src="{url}/images/web-gallery/static/js/v3_ie_fixes.js" type="text/javascript"></script>
<![endif]-->
<?php include 'includes/checktheban.php';?> 
<!-- Index and all other pages have been edited by Timo (ptimmaq2) from {hotelname} Hotel!<!-->
<!-- Made this Revcms Skin from Habbo's credits page.<!-->
</body>
</html>
        