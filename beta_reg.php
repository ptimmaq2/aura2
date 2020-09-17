 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Babux - BETA PAGE</title>
	
<!-- REMINDER TO MYSELF: Using Habbo's style folder, so if habbo goes down, need to use other style folder or rip theirs -->

    <script>
        var andSoItBegins = (new Date()).getTime();
        var habboPageInitQueue = [];
        var habboSecureServerRoot = "https://www.habbo.com";
        var habboStaticFilePath = "https://habboo-a.akamaihd.net/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/2543/web-gallery";
    </script>
    <link rel="shortcut icon" href="{url}/app/tpl/skins/custom-habbo/static/images/favicon.gif" type="image/vnd.microsoft.icon" />

    <link href='//fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic|Ubuntu+Condensed' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="http://25.88.140.109/app/tpl/skins/aura/css/frontpage.css" type="text/css" />
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
<body>

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
    </br>     <img src="{url}/app/tpl/skins/aura/images/logo.png" <img style="margin-left: 20px; <div align="left" style="color: #FA0000;margin-top: 35px;margin-left: 180px">&nbsp;&nbsp;&nbsp;&nbsp;  {online} User(s) Online  -  					<?php $query = mysql_query("SELECT COUNT(*) AS aantalleden FROM users") or die(mysql_error()); $data = mysql_fetch_assoc($query); echo $data['aantalleden']; ?>
</b> Registered! - Join the fun!</b>
<a href="{url}/index"><input style="margin-right: 20px;float:right;" class="confirm-button" type="submit" value="Index" /></a>
<a href="{url}/register"><input style="margin-right: 0px;float:right;" class="signout-red-button" type="submit" value="Register" /></a>      
           
    </div>
    <div id="top-bar-triangle"></div>
    <div id="top-bar-triangle-border"></div>
</header>
<style>
#people-inside{
	display:block;
	float:left;
	height:65px;
	position:relative;
	overflow:hidden;
	white-space:nowrap;
	z-index:100;
	top:30px;
	left:110px;
}
#people-inside b{
	float:left;
	padding:5px 10px 4px 16px;
	font-size:12px;
	height:56px;
	min-width:45px;
	max-width:145px;
	margin-right:8px;
	background:transparent url(http://25.88.140.109/images/web-gallery/v2/images/users_online_bubble.png) no-repeat -8px 0;
	color:#000;
	font-weight:normal;
	text-align:center;
	display:inline;
}
#people-inside i{
	position:absolute;
	right:0;
	top:0;
	width:8px;
	height:65px;
	background:transparent url(http://25.88.140.109/images/web-gallery/v2/images/users_online_bubble.png) no-repeat 0 0;
}
#people-inside span{
	display:block;
}
#people-inside .stats-fig{
	font-size:18px;
	font-weight:bold;
}
</style>

<div id="content">
               </br>
               </br>
               </br>
               </br>
               </br>
               </br>
    <div id="page-content"> 
        <section id="upper-content">
    <section id="upper-content-left">
	<h2> {hotelname} Hotel - Why not to join? It only takes a second!</h2>
        <h5 class="subscription-header"></h5> <!--got a new small idea from tutta cms,, so i guess 1% credit to them?-->
		  <div class="builders subscription-management" style="text-align:center;">

		<br /><!-- If you're gunna have breaks, do them right... -->
<form action="index" id="loginformitem" name="loginformitem" method="post">
<div class="input user">
<table style="position:relative;left:23%;" cellspacing="3px" cellpadding="3px">
<tr style="text-align:center;">
<td><h2></h2></td>
<td><input type="text" name="log_username" id="username" placeholder="Email" class="login-field" style="padding:5px;box-shadow:3px 3px 5px black;"/></td>
</tr>
<tr><td></td><td></td></tr>
<tr style="text-align:center;">
<td></td>
<div class="input pass">
<td><input type="password" name="log_password" id="password" placeholder="Password" class="login-field" style="padding:5px;box-shadow:3px 3px 5px black;border: 0;
background: #3b8ba4;
border-radius: 6px;
color: #baedf5;" /></td>
</div>
</tr>
<tr><td></td><td></td></tr>
<tr>
<td></td><td>
<input type="submit" name="login" id="button" value="Login Now!" class="confirm-button"></td>
</tr>
</table>
</form>

        <h5 class="subscription-header"></h5> <!--got a new small idea from tutta cms,, so i guess 1% credit to them?-->
		  <div class="builders subscription-management" style="text-align:center;">

		<br /><!-- If you're gunna have breaks, do them right... -->
<form action="index" id="loginformitem" name="loginformitem" method="post">
<div class="input user">
<table style="position:relative;left:23%;" cellspacing="3px" cellpadding="3px">
<tr style="text-align:center;">
<td><h2></h2></td>
<td><input type="text" name="log_username" id="username" placeholder="Email" class="login-field" style="padding:5px;box-shadow:3px 3px 5px black;"/></td>
</tr>
<tr><td></td><td></td></tr>
<tr style="text-align:center;">
<td></td>
<div class="input pass">
<td><input type="password" name="log_password" id="password" placeholder="Password" class="login-field" style="padding:5px;box-shadow:3px 3px 5px black;border: 0;
background: #3b8ba4;
border-radius: 6px;
color: #baedf5;" /></td>
</div>
</tr>
<tr><td></td><td></td></tr>
<tr>
<td></td><td>
<input type="submit" name="login" id="button" value="Login Now!" class="confirm-button"></td>
</tr>
</table>
</form>

		

</center>
  </div>
  </section>
  </br>
  </br>
  

    <section id="upper-content-right">
        <div id="subscription-status">


 <div id="welcome"><center>
                <a href="/register" class="button large" id="join-now-button"><b></b><span>Register Now!</span><span class="sub">(It's 100% free)</span></a>
<img src="{url}/app/tpl/skins/{skin}/css/img/tour_characters.gif" /> </div>

        </div>
    </section>
  
<footer>
    <div id="age-recommendation"></div>

    <div id="footer-content">
        <div id="footer"><a href="/rules">Rules</a> /<a href="/refund">Refund Policy</a> / <a href="/tos" target="_new">Terms of Service</a> / <a href="/dis" target="_new">Disclaimer</a> / <a href="/safety" target="_new">Safety</a> / <a href="/infringements">Infringements</a></div>
        <div id="copyright">&copy; 2013 
{hotelname} Hotel is not part of Sulake and is not Habbo, {hotelname} is no way affiliated with Sulake Corporation Oy,<br/> please do not enter your Habbo details here. All rights reserved to {hotelname}'s respective owner(s). {hotelname} Hotel's Skin is called Aura, it was originally made by Timo (aka ptimmaq2).</br><b>#HabboProjectAura</b></div>
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

        