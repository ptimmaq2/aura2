
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Babux - Homepage</title>
	
	
<!-- REMINDER TO MYSELF: I'm using Habbo's style folder, so if habbo goes down, need to use other style folder or rip theirs -->

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
					
					 <li class="">
                                <a href="{url}/me">Me</a>                            
                            </li>
                            
                           <li class="selected">
                                My Page
                            </li>
                            <li class="">
                                <a href="{url}/vip">VIP</a>
                            </li>
							<li>
							<?php if(mysql_result(mysql_query("SELECT rank FROM users WHERE id = '" . $_SESSION['user']['id'] . "'"), 0) >= 7) //* change the rank required for access to hk
            { ?>
                     <class="last"><a href="{url}/stafflogin/index.php?url=login">Housekeeping</a><span></span>
                    <?php
                    } ?></li>
                    </ul>                   
                </div></br></br></br></br></br></br>
				<div id="container">



    <section id="upper-content-left"> <div class="builders subscription-management" >
<h2>Stats</h2>

<div id="habboclub-info" class="box-content">

<p Align="left">
<b>Rank:</b> {rank}<br />
<b>Credits:</b> {Coins}<br />
<b>Pixels:</b> {Activitypoints}<br />
<b>Shells:</b> {VIP_points}<br />
<b>Motto:</b> {Motto}<br />
<b>Last Visit:</b> {lastsignedin}<br /><p>
<p><label><b>Link: </b><input type="text" name="acc_motto" size="32" maxlength="32" value="{url}/stats/stats.php?user={username}" id="avatarmotto"></label></p>
 <p><label><b>Forum Code: </b><input type="text" name="acc_motto" size="32" maxlength="32" value="[IMG]http://{url}/stats/stats.php?user={username}[/IMG]" id="avatarmotto"></label></p>                               </div>

                            </div></section>

                    
    <section id="lower-content-left"> <div class="builders subscription-management" >

<h2>Friends online</h2>

<div id="habboclub-info" class="box-content">
<?PHP
            $query = mysql_query("SELECT * FROM messenger_friendships WHERE user_one_id = '".$_SESSION['user']['id']."'");
            $i = 0;
            while($friends = mysql_fetch_array($query))
            {
                $getfriend = mysql_query("SELECT * FROM users WHERE id ='".$friends['user_two_id']."' AND online = '1' LIMIT 1");
                if(mysql_num_rows($getfriend) > 0)
                {
                    $i++;
                    if($i == 1)
                    {
                     
                        echo '<li id="feed-friends">Your friend(s) online are:<b><span> ';
                    }
                    $friend = mysql_fetch_array($getfriend);
echo htmlspecialchars($friend['username']).', ';
                }
            }
            if($i > 0)
echo '</b>';
 else if (mysql_num_rows($getfriend) == 0) {
echo '<i>No friends online</i>';
}?>

                                </div></section>
								<section id="upper-content-right"> <div class="builders subscription-management" >

<h2>{username}</h2>



<center>
<img src="http://habbo.nl/habbo-imaging/avatarimage?figure={figure}&action=sit,wav,crr=667&direction=2&head_direction=3&gesture=sml" alt="{username}">
</center>
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> </div><div id="column2" class="column"><div class="habblet-container ">
</div></section>
    <section id="upper-content-right"> <div class="builders subscription-management" >
                                <h2 class="title">About Me</h2>
                                <div style="padding:5px">
                                   Hello and welcome to your Babux home page. 
                                </div>
                            </div>
                        </div>
                    </div>
                <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
                </div>
</section>



</div>

    <section id="lower-content-right"> <div class="builders subscription-management" >
                          

<h2>What is this page?</h2>

<div id="habboclub-info" class="box-content">
 <center>  <p> Wondering what this page is for? This page displays your basic general account information. As you can see, it displays your credits amount, your pixels amount, your rank, your figure, your name and your motto. You can edit some of your account information <a href="{url}/profile">Here</a>.</p></center>

 
</div></section>

<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> </div><div id="column2" class="column"><div class="habblet-container ">

  <!--  <section id="upper-content-right"> <div class="builders subscription-management" >

<h2>{username}</h2>



<center>
<img src="http://habbo.nl/habbo-imaging/avatarimage?figure={figure}&action=sit,wav,crr=667&direction=2&head_direction=3&gesture=sml" alt="{username}">
</center>
<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> </div><div id="column2" class="column"><div class="habblet-container ">
</div></section>
    <section id="upper-content-right"> <div class="builders subscription-management" >
                                <h2 class="title">About Me</h2>
                                <div style="padding:5px">
                                   Hello and welcome to your Babux home page. 
                                </div>
                            </div>
                        </div>
                    </div>
                <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
                </div>
</section>
-->




 <?php include_once('includes/footer.php'); ?>