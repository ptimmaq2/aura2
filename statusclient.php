<?php include_once ("forcevote.php"); ?>
<?php include_once('checktheban.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
	<title>{hotelname} - Client</title>
<!-- Index and all other pages have been made by Timo (ptimmaq2) from Babux Hotel!<!-->
<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
    
<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<script type="text/javascript">
   window.addEventListener('contextmenu', function(e) {
                $('.rightclickmenu').css({
                        "margin-left": e.clientX,
                        "margin-top": e.clientY
                }).show()
              //small script i made to disable right clicking, you mad bro?
                e.preventDefault();
                window.addEventListener('click', function(){
                        $('.rightclickmenu').hide();
                })
   })
 
</script>
    <link rel="shortcut icon" href="{url}/favicon.ico" type="image/vnd.microsoft.icon" />


<script src="{url}/web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="{url}/web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="{url}/web-gallery/static/js/common.js" type="text/javascript"></script>

<link rel="stylesheet" href="{url}/app/tpl/skins/habbo/styles/common.css" type="text/css" />

<link rel="stylesheet" href="{url}/app/tpl/skins/habbo/styles/style.css" type="text/css" />

<link rel="stylesheet" href="{url}/web-gallery/v2/styles/habboflashclient.css" type="text/css" />
<script src="{url}/web-gallery/static/js/habboflashclient.js" type="text/javascript"></script>


<script type="text/javascript">
var ad_keywords = "petschke,diwox,gender%3Am,age%3A17";
var ad_key_value = "kvage=17;kvgender=m;kvtags=diwox:petschke";
</script>
<script type="text/javascript">
document.habboLoggedIn = true;
var habboName = "{username}";
var habboId = {id};
var facebookUser = false;
var habboReqPath = "";
var habboStaticFilePath = "{url}/web-gallery";
var habboImagerUrl = "/habbo-imaging/";
var habboPartner = "";
var habboDefaultClientPopupUrl = "/client";
window.name = "3981c0260af76a9eb267d9b2dd7cc602d4c7b7bf";
if (typeof HabboClient != "undefined") { HabboClient.windowName = "3981c0260af76a9eb267d9b2dd7cc602d4c7b7bf"; }
</script>

</script>

<meta property="fb:app_id" content="163085011898" />

<noscript>
    <meta http-equiv="refresh" content="0;url=/client/nojs" />
</noscript>
        
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/swfobject.js"></script>
        <script type="text/javascript">
            var BaseUrl = "{swf_folder}";
            var flashvars =
            {
                "client.starting" : "Please wait, {hotelName} is starting up!", 
				"hotelview.banner.url" : "{url}/game/rs4.php",
                "client.allow.cross.domain" : "1", 
                "client.notify.cross.domain" : "0", 
                "connection.info.host" : "localhost", 
                "connection.info.port" : "3000", 
                "site.url" : "{url}", 
                "url.prefix" : "{url}", 
                "client.reload.url" : "{url}/client", 
                "client.fatal.error.url" : "{url}/me", 
                "client.connection.failed.url" : "{url}/disconnected", 
                "external.variables.txt" : "{url}/game/external_variables.txt", 
                "external.texts.txt" : "{url}/game/external_flash_texts.txt", 
                "productdata.load.url" : "{url}/game/productdata.txt", 
                "furnidata.load.url" : "{url}/game/furnidata_xml.xml", 
                "use.sso.ticket" : "1", 
                "sso.ticket" : "{sso}", 
                "processlog.enabled" : "0", 
                "flash.client.url" : BaseUrl, 
                "flash.client.origin" : "popup" 
            };
            var params =
            {
                "base" : BaseUrl + "/",
                "allowScriptAccess" : "always",
                "menu" : "false"                
            };
         params["wmode"] = "opaque";
    if (!(HabbletLoader.needsFlashKbWorkaround())) {
    	params["wmode"] = "opaque";
    }

    FlashExternalInterface.signoutUrl = "/logout";
    
    var clientUrl = "{url}/game/Habbo.swf";

    swfobject.embedSWF(clientUrl, "flash-container", "100%", "100%", "10.0.0", "http://images.habbo.com/habboweb/61_c0f99b7b02ed27ad5d4d5661fe02784f/8/web-gallery/flash/expressInstall.swf", flashvars, params);
 
    window.onbeforeunload = unloading;
    function unloading() {
        var clientObject;
        if (navigator.appName.indexOf("Microsoft") != -1) {
            clientObject = window["flash-container"];
        } else {
            clientObject = document["flash-container"];
        }
        try {
            clientObject.unloading();
        } catch (e) {}
    }
</script>

<link rel="stylesheet" href="{url}/web-gallery/embedtopbar.css" type="text/css" />
<link rel="stylesheet" href="buttons.css" type="text/css" /> 
<meta name="build" content="63-BUILD500 - 09.08.2011 23:00 - de" />
</head>

<body id="client" class="flashclient">
<script type="text/javascript">
   window.addEventListener('contextmenu', function(e) {
                $('.rightclickmenu').css({
                        "margin-left": e.clientX,
                        "margin-top": e.clientY
                }).show()
              //small script i made to disable right clicking, you mad bro?
                e.preventDefault();
                window.addEventListener('click', function(){
                        $('.rightclickmenu').hide();
                })
   })
 
</script>
<script type="text/javascript">
jjLoader.init('client', 6, 'http://xubbo.de/web-gallery/v2/images/habbo.png', 'http://habbo.hs.llnwd.net/c_images/hotel_view_images_hq/hotelview_xmas10_000.png');
</script>

<div id="overlay"></div>
<div id="embed-topbar">
<div id="fullscreen-button"> 
<a href="{url}/articles"><input style="margin-right: 20px;float:right;margin-top:3px;" class="confirm-button" type="submit" value="News" /></a>
<a href="{url}/logout"><input style="margin-right: 0px;float:right;margin-top:3px;" class="signout-red-button" type="submit" value="Sign Out" /></a>
<?php if(mysql_result(mysql_query("SELECT rank FROM users WHERE id = '" . $_SESSION['user']['id'] . "'"), 0) >= 7) //* change the rank required for access to hk
            { ?>
                   <a href="{url}/stafflogin"><input style="float:right;margin-top:3px;" class="cancel-button" type="submit" value="Housekeeping" /></a>
                    <?php
                    } ?></li>
                    </ul>  


</div>
    <div id="navi">
            <a target="_blank" href="/staff">Staff</a>
			
			<span>|</span>
            <a target="_blank" href="/online">Community</a>
			
			<span>|</span>
            <a target="_blank" href="/rules">Rules</a>
			
			<span>|</span>
            <a target="_blank" href="/profile">Settings</a>
			  
    </div>
	
<center><iframe src="http://myloradio.net/embed/embedcode.html" scrolling="no" frameborder="0" height="50" width="250" style="float:right;margin-right:100px;margin-top:-30px;"></iframe><br><br></center>
<div id="right-buttons">


<div style="float:left;padding-left:5px;width:64px;height:60px;margin-bottom:-8px;margin-top:-26px;margin-left:-8px;background: url(http://www.habbo.de/habbo-imaging/avatarimage?figure={figure}&direction=2&head_direction=3&gesture=sml&size=b&img_format=gif);"></div>
<!--If you want to use mylo radio lol, delete this line.
<iframe src="http://myloradio.net/embed/embedcode.html" scrolling="no" frameborder="0" height="34" width="250"></iframe><!-->
</div>
</div>


<script type="text/javascript"> 
    Embed.decorateNaviLinks();
    Embed.decorateLogoLink();
</script>
<div id="overlay"></div>
<div id="client-ui" class="embed">

    <div id="flash-wrapper">
    <div id="flash-container">
        <div id="content" style="width: 400px; margin: 20px auto 0 auto; display: none">
<div class="cbb clearfix">
    </div>
</div>
<img src="{url}/web-gallery/v2/images/page_loader.gif" style="position:absolute; margin: -1500px;" />

<div id="overlay"></div>
<div id="client-ui" >
    <div id="flash-wrapper">
    <div id="flash-container">
        <div id="content" style="width: 400px; margin: 20px auto 0 auto; display: none">
<div class="cbb clearfix">
    <h2 class="title">Bitte besorg dir die neueste Adobe Flash Player Version.</h2>

    <div class="box-content">
            <p>Hier kannst Du den Adobe Flashplayer herunterladen und installieren:  <a href="http://get.adobe.com/flashplayer/">Install flash player</a>. Mehr Informationen und Anweisungen zur Installation sind hier zu finden:  <a href="http://www.adobe.com/products/flashplayer/productinfo/instructions/">Mehr Informationen</a></p>
            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://images.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/252/web-gallery/v2/images/client/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
</div>
        </div>
        <script type="text/javascript">
            $('content').show();
        </script>

        <noscript>
            <div style="width: 400px; margin: 20px auto 0 auto; text-align: center">
                <p>If you are not automatically redirected, please <a href="/client">click here</a></p>
            </div>
        </noscript>
    </div>
    </div>
	<div id="content" class="client-content"></div>            
</div>
    <div style="display: none">
<div id="habboCountUpdateTarget">
<script type="text/javascript" src="http://www.ipcounter.de/count_js.php?u=68168672&amp;color=red"></script>
</div>
	<script language="JavaScript" type="text/javascript">
		setTimeout(function() {
			HabboCounter.init(600);
		}, 20000);
	</script>

    </div>
    <script type="text/javascript">
        RightClick.init("flash-wrapper", "flash-container");
        if (window.opener && window.opener != window && window.opener.location.href == "/") {
            window.opener.location.replace("/me");
        }
        $(document.body).addClassName("js");
       	HabboClient.startPingListener();
    </script>
<div id="fb-root"></div>
<script type="text/javascript">
    (function() {
        var e = document.createElement('script');
        e.async = true;
        e.src = 'https://connect.facebook.net/de_DE/all.js';
        document.getElementById('fb-root').appendChild(e);
    }());
</script>

</body>
</html>
