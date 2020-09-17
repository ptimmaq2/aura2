<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Babux - Sign in or register now!</title>
	
<!-- REMINDER TO MYSELF: Using Habbo's style folder, so if habbo goes down, need to use other style folder or rip theirs -->

    <script>
        var andSoItBegins = (new Date()).getTime();
        var habboPageInitQueue = [];
        var habboSecureServerRoot = "https://www.habbo.com";
        var habboStaticFilePath = "https://habboo-a.akamaihd.net/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/2543/web-gallery";
    </script>
    <link rel="shortcut icon" href="{url}/app/tpl/skins/custom-habbo/static/images/favicon.gif" type="image/vnd.microsoft.icon" />

    <link href='//fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic|Ubuntu+Condensed' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://habboo-a.akamaihd.net/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/2543/web-gallery/static/styles/v3_default.css" type="text/css" />
 <script type="text/javascript" src="{url}/app/tpl/skins/{skin}/js/libs2.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/{skin}/js/visual.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/{skin}/js/libs.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/{skin}/js/common.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/{skin}/js/fullcontent.js"></script>
		<script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/lightweightmepage.js"></script>

<script src="{url}/images/web-gallery/static/js/v3_landing_top.js" type="text/javascript"></script>

        <meta name="description" content="Check into the world's largest virtual hotel for FREE! Meet and make friends, play games, chat with others, create your avatar, design rooms and more..." />
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
    <div id="header-content">
    </br>     <img src="{url}/app/tpl/skins/aura/images/logo.png" <img style="margin-left: 20px; <div align="left" style="color: #FA0000;margin-top: 35px;margin-left: 180px">&nbsp;&nbsp;&nbsp;&nbsp;  {online} User(s) Online  -  					<?php $query = mysql_query("SELECT COUNT(*) AS aantalleden FROM users") or die(mysql_error()); $data = mysql_fetch_assoc($query); echo $data['aantalleden']; ?>
</b> Registered!</b>
<a href="{url}/index"><input style="margin-right: 20px;float:right;" class="confirm-button" type="submit" value="Index" /></a>
<a href="{url}/register"><input style="margin-right: 0px;float:right;" class="signout-red-button" type="submit" value="Register" /></a>      
            <div class="navigation">
                <ul>
                        <li class="selected">
                            <a href="{url}/community"><span class="safety"></span> Index</a>
                            <span></span>
                        </li>
						
                    
                </ul>
            </div>
    </div>
    <div id="top-bar-triangle"></div>
    <div id="top-bar-triangle-border"></div>
</header>

<div id="content">
                <div class="sub-navigation">
                    <ul>
					
                           <li class="selected">
						   {Hotelname} - Register Now!
						   </li>
                    </ul>
                </div>
				
				</div>
</div>
</div>
    <div id="page-content">
        <section id="upper-content">
    <section id="upper-content-left">
	<h2> Your Info: </h2>
        <h5 class="subscription-header"></h5> <!--got a new small idea from tutta cms,, so i guess 1% credit to them?-->
		  <div class="builders subscription-management" style="text-align:center;">

     <br /><!-- If you're gunna have breaks, do them right... -->
		                        <label for="login-username">Email</label><br />
            <input tabindex="2" type="text" class="login-field" name="log_username" id="credentials-email" style="box-shadow:2px 2px 3px black;border-radius:6px;"><br /><br />
							 <label for="login-username">Password</label><br />
            <input tabindex="3" class="login-field" type="password" name="log_username" type="password" id="credentials-password" style="box-shadow:2px 2px 3px black;border: 0;background: #3b8ba4;border-radius: 6px;padding: 2px 4px 2px 5px;color: #baedf5;">
  			<br /><p>
			<input type="submit" value="Login" class = "button" name="login" style="background-color: #00753f;
border: 2px solid #79c151;
border-radius: 5px;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
height: 30px;
line-height: 20px;
min-width: 84px;
color: #e7f5ba;
font-weight: bold;
margin-left: 150px;
font-size: 15px;">

					</a><p><br />
	     

  </div>
  </section>

    <section id="upper-content-right">
        <div id="subscription-status">


<h2>
        Register
</h2>

<div class="builders subscription-management">
        <div class="subscription-info">
          
        </div>
<p align="left">All register shit.</br>
<a href="{url}/me"><input style="margin-right: 20px;position:absolute;" class="confirm-button" type="submit" value="Register" /></a></br></br>
    </div>
</div>


        </div>
    </section>
  
<?php include 'includes/footer.php';?>

    

        