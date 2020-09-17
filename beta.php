
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Babux - Home</title>
	
	

<!--REVCMS THEME BY PTIMMAQ2 AKA ISMAKT & 1PTIMMAQ1, OWNER OF BABUX HOTEL-->
            <!--DON'T BE A DICK AND REMOVE MY CREDITS....-->
    <script>
        var andSoItBegins = (new Date()).getTime();
        var habboPageInitQueue = [];
        var habboSecureServerRoot = "https://www.habbo.com";
        var habboStaticFilePath = "https://habboo-a.akamaihd.net/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/2543/web-gallery";
    </script>
<?php include 'includes/style.php';?>


<body>

<div id="overlay"></div>
<header>
    <div id="border-left"></div>          <!--REVCMS THEME BY PTIMMAQ2 AKA ISMAKT & 1PTIMMAQ1, OWNER OF BABUX HOTEL.-->    
      <div id="border-right"></div>                         <!--DON'T BE A DICK AND REMOVE MY CREDITS....-->
        <div id="header-content">
           </br>    
<img src="{url}/app/tpl/skins/aura/images/logo.png" <img style="margin-left: 20px; <div align="left" style="color: #FA0000;margin-top: 35px;margin-left: 180px">&nbsp;&nbsp;&nbsp;&nbsp;  {online} User(s) Online  &nbsp;		-&nbsp;		<?php $query = mysql_query("SELECT COUNT(*) AS aantalleden FROM users") or die(mysql_error()); $data = mysql_fetch_assoc($query); echo $data['aantalleden']; ?>
   </b> Registered!</b>

   <a href="{url}/client"><input style="margin-right: 20px;float:right;" class="confirm-button" type="submit" value="Enter Client" /></a>

   <a href="{url}/logout"><input style="margin-right: 0px;float:right;" class="signout-red-button" type="submit" value="Sign Out" /></a>

       <?php if(mysql_result(mysql_query("SELECT rank FROM users WHERE id = '" . $_SESSION['user']['id'] . "'"), 0) >= 7) //* change the rank required for access to hk
            { ?>
                   <a href="{url}/stafflogin"><input style="float:right;" class="cancel-button" type="submit" value="Housekeeping" /></a>
                    <?php
                    } ?></li>
                    </ul>   
					
					
<!-- Energy drinks are not good for you. -->
            <div class="navigation">
                <ul>
                        <li>
						 <li class="selected">
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
						<li>
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
                                Me
                            </li>
                            <li class="">
                                <a href="{url}/home">My Page</a>
                            </li>
                            <li class="">
                                <a href="{url}/vip">VIP</a>
                            </li>
							
                </div>
    <div id="page-content">
        <section id="upper-content">
  <section>
                
    <?php include 'includes/lebar.php';?> <!--take this away if you dont like the bar on the me page.-->
           
    </section>
	</br></br>
    <section id="upper-content-centered">
		  <div class="perse-info-box" >    
		      <div id="wide-personal-info">



    <div id="habbo-plate">
	

            <a href="{url}/accounts">

            <img alt="{username}" src="http://habbo.fi/habbo-imaging/avatarimage?figure={figure}&direction=2&head_direction=3">


        </a>
			<img src="http://25.88.140.109/projects/babux/game/c_images/album1584/VIP.gif" style="margin-left: 10px; margin-top: -40px;">

    </div>



    <center><div id="name-box" class="info-box">

        <div class="label"><font color="white" style="font-size:22px; text-shadow: 1px 1px #A8A8A8;">  {username}</font></div></br>

        <div class="content"><font color="white"style="font-size:18px; text-shadow: 1px 1px #a8a8a8;">  {motto}</font></div>

    </div>

  
    <div id="last-logged-in-box" class="info-box">

        <div class="label"> 
		    <font color="FFEF00" style="font-size:18px; text-shadow: 1px 1px #B59600;">{coins} <img src="http://25.88.140.109/projects/babux/app/tpl/skins/aura/img/coin.png"></font>
		    <font color="CC51C5" style="font-size:18px; text-shadow: 1px 1px #B1007D;">{activitypoints} <img src="http://25.88.140.109/projects/babux/app/tpl/skins/aura/img/ducket.png"></font>
            <font color="B0F2A9"style="font-size:18px; text-shadow: 1px 1px #B2D87E">{diamonds} <img src="http://25.88.140.109/projects/babux/app/tpl/skins/aura/img/diamond.png"></font>
		</div>
    </div></center>



<div class="enter-hotel-btn">
            <div class="open enter-btn">
                    <a href="https://findretros.com/rankings/vote/BabuxHotel1" style="font-size:16px;" target="38c35fe8bac3cff9c706f467ca3909ac2e5d7f52" onclick="HabboClient.openOrFocus(this); return false;">Enter {hotelname} Hotel<i></i></a>
                <b></b>
            </div>
</div>
</div>
                          </div></section>
						  
 
       

</br><!--
    <section id="lower-content-left"><div class="slider">
<div id="promo-box">

    <div id="promo-bullets"></div>

        <div class="promo-container" style="background-image: url(http://habboo-a.akamaihd.net/c_images/web_promo/StoriesShakespeare_MidsummerEvent_promo_2.png)">
            <div class="promo-content-container">
                <div class="promo-content">
                    <div class="title">{newsTitle-1}</div>
                    <div class="body">{newsCaption-1}</div>
                </div>
            </div>
            <div class="promo-link-container">
<div class="enter-hotel-btn">
   <a href="{url}/news"><input style="margin-right: 20px;float:right;" class="confirm-button" type="submit" value="Read More" /></a>
        <b></b>
    </div>
</div>
            </div>
        </div>
        <div class="promo-container" style="display: none; background-image: url(http://habboo-a.akamaihd.net/c_images/web_promo/StoriesShakespeare_MidsummerEvent_promo_2.png)">
            <div class="promo-content-container">
                <div class="promo-content">
                    <div class="title">{newsTitle-2}</div>
                    <div class="body">{newsCaption-2}</div>
                </div>
            </div>
            <div class="promo-link-container">
<div class="enter-hotel-btn">
     <a href="{url}/news"><input style="margin-right: 20px;float:right;" class="confirm-button" type="submit" value="Read More" /></a>       <b></b>
    </div>
</div>
            </div>
        </div>
        <div class="promo-container" style="display: none; background-image: url(http://habboo-a.akamaihd.net/c_images/web_promo/StoriesShakespeare_MidsummerEvent_promo_2.png)">
            <div class="promo-content-container">
                <div class="promo-content">
                    <div class="title">{newsTitle-3}</div>
                    <div class="body">{newsCaption-3}</div>
                </div>
            </div>
            <div class="promo-link-container">
                    <div class="enter-hotel-btn">
                          <a href="{url}/news"><input style="margin-right: 20px;float:right;" class="confirm-button" type="submit" value="Read More" /></a>
                        </div>
                    </div>
            </div>
        </div>
        <div class="promo-container" style="display: none; background-image: url(http://habboo-a.akamaihd.net/c_images/web_promo/StoriesShakespeare_MidsummerEvent_promo_2.png)">
            <div class="promo-content-container">
                <div class="promo-content">
                    <div class="title">{newsTitle-4}</div>
                    <div class="body">{newsCaption-4}</div>
                </div>
            </div>
            <div class="promo-link-container">
            </div>
        </div>
        <div class="promo-container" style="display: none; background-image: url(http://habboo-a.akamaihd.net/c_images/web_promo/StoriesShakespeare_MidsummerEvent_promo_2.png)">
            <div class="promo-content-container">
                <div class="promo-content">
                    <div class="title">{newsTitle-5}</div>
                    <div class="body">{newsCaption-5}</div>
                </div>
            </div>
            <div class="promo-link-container">
<div class="enter-hotel-btn">
       <a href="{url}/news"><input style="margin-right: 10px;float:right;" class="confirm-button" type="submit" value="Read More" /></a>
        <b></b>
    </div>
</div>
            </div>
</br></br>-->
</br></div>




		
		
<br />
<br />
<br />
<br />
<br />
<br />
</b>
</b>
          <br><br><br><br><br><br>
<br>
<br>   <!--without these the pages cant be scrolled down enough too see full content sometimes...hehe..-->
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>

<footer>
    <div id="age-recommendation"></div>

    <div id="footer-content">
        <div id="footer"><a href="/rules">Rules</a> /<a href="/refund">Refund Policy</a> / <a href="/tos" target="_new">Terms of Service</a> / <a href="/dis" target="_new">Disclaimer</a> / <a href="/safety" target="_new">Safety</a> / <a href="/infringements">Infringements</a></div>
        <div id="copyright">&copy; 2013 
{hotelname} Hotel is not part of Sulake and is not Habbo, {hotelname} is no way affiliated with Sulake Corporation Oy,<br/> please do not enter your Habbo details here. All rights reserved to {hotelname}'s respective owner(s). {hotelname} Hotel's Skin is called Aura, it was originally made by ptimmaq2.</br><b> </b></br></div>
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

    
<!--REVCMS THEME BY PTIMMAQ2 AKA ISMAKT & 1PTIMMAQ1, OWNER OF BABUX HOTEL-->
            <!--DON'T BE A DICK AND REMOVE MY CREDITS....-->

