
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

<?php include 'includes/navigation.php';?>


					
					
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

					
					
<!-- Energy drinks are not good for you. -->
       <!--    <div class="nav-bar">
                    <nav>
                        <ul>
                            <li><a href="#"><img src="{url}/app/tpl/skins/aura/img/navi/community.png"></a>
								<ul>
									<li><a href="{url}/me">Home</a></li>
									<li><a href="{url}/settings">Settings</a></li>
									<li><a href="{url}/home">My Page</a></li>
									<li><a href="{url}/accounts">Accounts</a></li>
								</ul>
							</li>
                            <li><a href="#"><img src="{url}/app/tpl/skins/aura/img/navi/community.png"></a>
                                <ul>
                                    <li><a href="{url}/news">News</a></li>
                                    <li><a href="{url}/staff">Staff</a></li>
                                    <li><a href="{url}/community">Community</a></li>
                                </ul>
                            </li>
							<li><a href="#"><img src="{url}/app/tpl/skins/aura/img/navi/shop.png"></a>
                                <ul>
                                    <li><a href="{url}/vip">Buy VIP</a></li>
                                    <li><a href="{url}/vip">VIP Members</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><img src="{url}/app/tpl/skins/aura/img/navi/users.png"></a>
								<ul>
									<li><a href="{url}/projects/forum" target="_blank">Forum</a></li>									
									<li><a href="{url}/logout" target="_blank">Sign out</a></li>									
								</ul>
							</li>
                        </ul>
						 <a href="{url}/client"><input style="margin-right: 20px;float:right;" class="confirm-button" type="submit" value="Enter Client" /></a>

   <a href="{url}/logout"><input style="margin-right: 0px;float:right;" class="signout-red-button" type="submit" value="Sign Out" /></a>

       <?php if(mysql_result(mysql_query("SELECT rank FROM users WHERE id = '" . $_SESSION['user']['id'] . "'"), 0) >= 7) //* change the rank required for access to hk
            { ?>
                   <a href="{url}/stafflogin"><input style="float:right;" class="cancel-button" type="submit" value="Housekeeping" /></a>
                    <?php
                    } ?></li>
                    </ul> 						
                    </nav>
					
                </div>-->


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
	 
	 <!-- Beta warning. -->
	<?php include 'includes/warning.php'; ?>
	
	
		  <div class="perse-info-box"style="margin-top:15px;" >    
		      <div id="wide-personal-info">



    <div id="habbo-plate">
	

            <a href="{url}/accounts">

            <img alt="{username}" src="http://habbo.nl/habbo-imaging/avatarimage?figure={figure}&direction=2&head_direction=3&action=stand,crr=006">


        </a>
			<img src="{url}/game/c_images/album1584/VIP.gif" style="margin-left: 10px; margin-top: -40px;">

    </div>

<!--<span style="font-family:Arial,Helvetica,sans-serif; color: #2d0747;text-shadow: 0px 0px 3px #7700ff;background:url(/app/tpl/skins/Custom-Habbo/images/glitter.gif);">' .$member['username'] . '</strong></span>
-->     <center>
	   <div id="name-box" class="info-box">

             <div class="label"></br>
<span style="font-family:Arial,Helvetica,sans-serif; color: #fff;text-shadow: 0px 0px 3px #fff;background:url(/app/tpl/skins/aura/habboweb/background4.gif);font-size:22px; text-shadow: 1px 1px #A8A8A8; margin-top:15px;">  {username}</span></font></div></br>

             <div class="content"><font color="#fff" style="font-size:18px; text-shadow: 1px 1px #fff;">  {motto}</font></div>

    </div>

   
    <div id="last-logged-in-box" class="info-box">
		  

			<div class="label"> 
				<font color="FFEF00" style="font-size:18px; text-shadow: 1px 1px #B59600;">{coins} <img src="{url}/app/tpl/skins/aura/img/coin.png"></font>
				<font color="CC51C5" style="font-size:18px; text-shadow: 1px 1px #B1007D;">{activitypoints} <img src="{url}/app/tpl/skins/aura/img/ducket.png"></font>
				<font color="B0F2A9"style="font-size:18px; text-shadow: 1px 1px #B2D87E">{diamonds} <img src="{url}/app/tpl/skins/aura/img/diamond.png"></font>
				
		</div>
        </div>
	
	
	<div id="online-friends-box-thing"style="margin-top:-5px;margin-left:10px;">
	
	     <div class="label">
	          <font color="white" style="font-size:16px; text-shadow: 1px 1px #A8A8A8;margin-top:-20px;"><p align="left">
				  <img src="{url}/app/tpl/skins/aura/images/icons/stats.gif"style="margin-top:-5px;">&nbsp;&nbsp; Friends online now: Underconstruction. </font>
</div>
</br>
</center>

                  <!--REVCMS THEME BY PTIMMAQ2 AKA ISMAKT & 1PTIMMAQ1, OWNER OF BABUX HOTEL-->
                              <!--DON'T BE A DICK AND REMOVE MY CREDITS....-->

<div class="enter-hotel-btn" style="margin-left:80px;">
            <div class="open enter-btn" style="margin-left:80px">
                    <a href="https://findretros.com/rankings/vote/BabuxHotel1" style="font-size:16px;color:#e7f5ba;" target="38c35fe8bac3cff9c706f467ca3909ac2e5d7f52" onclick="HabboClient.openOrFocus(this); return false;">&nbsp; Enter {hotelname} Hotel &nbsp;<i></i></a>
                <b></b>
            </div>
</div>
</div>
                          </div>
						</section>
				  
	    <section id="lower-content-centered">  
		      <div class="small-alert-box" style="margin-top:10px;"> 
	          <p style="margin-left:10px;margin-top:-10px;">Want to help Babux get a vps? Then go and Buy vip. Press  <a href="{url}/buyvip">Here.</a>
</p>
		  
	</div>
		  <div class="small-alert-box-1" style="margin-left:700px;margin-top:-203px;"> 
		  <div id="promo-box">

    <div id="promo-bullets"></div>
<h4 style="margin-left:5px;margin-top:5px;"> Latest news article: </h4>
        <div class="promo-container" style="background-image: url({url}/app/tpl/skins/Habbo/Promo/1.png)">
            <div class="promo-content-container">
                <div class="promo-content">
                    <div class="title">{newsTitle-1}</div>
                    <div class="body">{newsCaption-1}</div>
					
					</br>
<a href="{url}/news"><input style="float:center;margin-left:200px;margin-top:10px;" class="confirm-button" type="submit" value="Read More" /></a>

                </div>
            </div>
          </div>
		  </div>
		  </div>
			
</section>
</div>
</br>
<br>
</br>
<br>
			
			
	 	
      <br>
      <br>
      <br>
      <br>
      <br>
		  </br>
		  </br>
		  </br>
		  </br>
		  </br>
		  </br>
		  </br>
		  </br>
		  </br>
		  </br>
		  </br>
		  </br>
		  
		  
		  
		  
		  
		 <!-- Underconstruction ;3 -->						  
<?php /*include ('includes/campaign.php');*/ ?>
       

</br>



		
		
  
<?php include 'includes/footer.php';?>

    
<!--REVCMS THEME BY PTIMMAQ2 AKA ISMAKT & 1PTIMMAQ1, OWNER OF BABUX HOTEL-->
            <!--DON'T BE A DICK AND REMOVE MY CREDITS....-->

