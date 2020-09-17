<?php /*
if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) { $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP']; }

if (!isset($_GET['novote']) && $_GET['url'] != 'register') {
 $context = stream_context_create(array('https' => array('timeout' => 0.5)));
 $data = file_get_contents('https://findretros.com/validate.php?user=s1ckhotel&ip=' . $_SERVER['REMOTE_ADDR'], 0, $context);
 if($data == 3) {
  header("Location: https://findretros.com/vote/s1ckhotel");
  exit;
 }
}*/
error_reporting(0);
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Home</title>
        
        <link rel="stylesheet" href="http://25.88.140.109/missions/common.css" type="text/css">
        <link rel="stylesheet" href="http://25.88.140.109/missions/lightweightmepage.css" type="text/css">
		<link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/campaigns.css" type="text/css">
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs2.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/visual.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/common.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/fullcontent.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/lightweightmepage.js"></script>
        <script type="text/javascript">
            document.habboLoggedIn = true;
            var habboName = "{username}";
            var habboId = {userid};
            var habboReqPath = "";
            var habboStaticFilePath = "{url}/app/tpl/skins/Habbo";
            var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
            var habboPartner = "";
            var habboDefaultClientPopupUrl = "{url}/client";
            window.name = "habboMain";
            if (typeof HabboClient != "undefined") {
                HabboClient.windowName = "eac955c8dbc88172421193892a3e98fc7402021a";
                HabboClient.maximizeWindow = true;
            }
        </script>
        
        <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/personal.css" type="text/css">
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/habboclub.js"></script>
        
        <!--[if IE 8]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/ie8.css" type="text/css">
        <![endif]-->
        <!--[if lt IE 8]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/ie.css" type="text/css" />
        <![endif]-->
        <!--[if lt IE 7]>
            <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/ie6.css" type="text/css" />
            <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/pngfix.js"></script>
            <script type="text/javascript">
                try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
            </script>
            <style type="text/css">
                body { behavior: url({url}/app/tpl/skins/Habbo/js/csshover.htc); }
            </style>
        <![endif]-->
		<!-- RevCMS habbo theme edit, by Chris. With more edits from Sick!-->
    </head>
    
    <body id="home">
    
            <div id="overlay"></div>
             <?php include ("includes/header.php"); ?>
                <ul id="navi">
                    <li class="metab selected"><strong>{username}</strong><span></span></li>
                    <li><a href="{url}/community">Community</a><span></span></li>
					<li><li id="tab-register-now" class="tab-register-now"><a href="{url}/shop">Shop</a><span></span></li>
					<li><a href="{url}/values">Rare Values</a><span></span></li>

					
			
                <div id="habbos-online"><div class="rounded"><span>{online} Users Online!</span></div></div>
            </div>
        </div>
        <div id="content-container">
            <div id="navi2-container" class="pngbg">
                <div id="navi2" class="pngbg clearfix">
                    <ul>
                        <li class="selected">Home</li>
                        <li class=" last"><a href="{url}/account">Account Settings</a></li>
                        <li class=" last"><a href="{url}/home/{username}">My Home</a></li>
						<li class=" last"><a href="https://docs.google.com/forms/d/1w7IarDFbxHlHQLdjLAsTNwy8DtkgICYXk7F7Xd4a2iA/viewform">Staff Apps!</a></li>
                    </ul>
                </div>
            </div>
         <div id="container"><?php
					$getCampaigns = mysql_query("SELECT `text`, `colour` FROM `alert` WHERE `enabled` = '1' ORDER BY `order_id` ASC");
					while ($item = mysql_fetch_assoc($getCampaigns))
					{
						
						echo '<div class="alert alert-'.$item['colour'].'">'.$item['text'].'</div>';
					}
					?>
        	<div id="content" style="position: relative" class="clearfix">
            <div id="wide-personal-info">

            <div id="habbo-plate">
                    <img alt="{username}" src="http://www.habbo.nl/habbo-imaging/avatarimage?figure={figure}.gif"/>
                </a>
            </div>

            <div id="name-box" class="info-box">
                <div class="label">Name:</div>
                <div class="content">{username}</div>
            </div>
            <div id="motto-box" class="info-box">
                <div class="label">Motto:</div>
                <div class="content">{motto}</div>
            </div>
            <div id="last-logged-in-box" class="info-box">
                <div class="label">Are You Vip?:</div>
                <div class="content">{Vip}</div>
            </div>

        <div class="enter-hotel-btn">
            <div class="credits" style="float: left; margin-top: 3px;"><b>{coins}</b> Credits</div>
			<div class="pixels" style="float: right; margin-right: 7px; margin-top: 3px;"><b>{activitypoints}</b> Pixels</div>	
            <div class="shells" style="float: left;"><b>{vip_points}</b> Points</div>
			<div class="rank" style="float: right; margin-right: 7px;">Rank <b>{rank}</b></div>


            </div>
       
							
		

        </div></div>
        <div id="promo-box">
		<div id="promo-bullets"></div>

                <?php
                $to5 = mysql_query("SELECT * FROM cms_news ORDER BY ID DESC LIMIT 5") or die(mysql_error());
                ?>

                <?php $i = 0; while($newsobject = mysql_fetch_assoc($to5)){ $i++; ?>

                        <div class="promo-container" style="background-image: url({url}/app/tpl/skins/Habbo/images/web_promo/<?php echo $newsobject['image']; ?>)<?php if($i != '1'){ ?>; display: none<?php } ?>">
                            <div class="promo-content-container">
                                <div class="promo-content">
								<div style="padding:8px;width:280px;height:160px;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;border:0px solid #FFFFFF;background:rgba(0,0,0,0.4);">
                                    <div class="title"><?php echo $newsobject['title']; ?></div>
                                    <div class="body"><?php echo $newsobject['shortstory']; ?></div>
                                </div>
                            </div></div>
                            <div class="promo-link-container">
                
                <div class="open enter-btn">
                             <div style="margin-top:2px"><a href="{url}/index.php?url=news&id=<?php echo $newsobject['id']; ?>">Read the full article &raquo;</a>
                        <b></b></div>
                    </div><div style="color:#FFF;margin-top:25px">&nbsp;&nbsp;&nbsp;&nbsp;Posted on: <b><?php echo date('F d, Y', $newsobject['published']); ?></b></div>
                            </div>
                </div>
                
                      </div>

                        <?php }?>

                <script type="text/javascript">
                    document.observe("dom:loaded", function() { PromoSlideShow.init(); });
                </script>

                
                 <div id="column2" class="column">
                             <div id="ColumnBox">
                              <div id="ColumnBoxHeader" class="red">Radio</div>
                               <div style="margin-top:5px;margin-bottom:5px:margin-left:2px">
					<embed src='http://www.shoutcast.com/media/popupPlayer_V19.swf?stationid=http://yp.shoutcast.com/sbin/tunein-station.pls?id=8318&play_status=1' quality='high' bgcolor='#ffffff' width='280' height='104' name='popupPlayer_V19' align='middle' allowScriptAccess='always' allowFullScreen='true' type='application/x-shockwave-flash' pluginspage='http://www.adobe.com/go/getflashplayer' ></embed>


				 <div id="column2" class="column">
                             <div id="ColumnBox" style="margin-top:10px;margin-left:-5px;">
                              <div id="ColumnBoxHeader" class="red" style="margin-top:10px;margin-left:-5px;">Donations</div>
							  <br />
							  <br />
							  All Donations Are Appreciated And Funds Will Be Put Towards Sick Hotel Improvments.
							  <br />
							  <br />
							  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="4X7MTQE6MEN3Q">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

                    

				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
								
    </div>
        <!--[if lt IE 7]>
            <script type="text/javascript">
                Pngfix.doPngImageFix();
            </script>
        <![endif]-->
        
        <div id="footer" >
			<?php include('includes/footer.php'); ?>
			<?php include('includes/checktheban.php'); ?>
        </div>
    
    </body>
</html>