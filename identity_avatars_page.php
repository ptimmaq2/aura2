<?php
    /** ************************************************\
     *  Iplace CMS                                       \
     *  @copyright 2014                                   \
     *  @since 2013                                        \
     *  @author Jasler.nl                                   \
     *  @link http://jasler.nl/iplace/                       \
     *  @deprecated OLDER VERSIONS LOWER THAN THIS ONE        \
     *  @name Iplace CMS                                       \
     *  @license FREE LIFE LICENCE                              \
     *  @tutorial http://jasler.nl/iplace/tutorial/             /
     *                                                         /
     *  DON'T CHANGE SOMETHING IF YOU DON'T                   /
     *  KNOW HOW IT WORKS!                                   /
     *                                                      /
     *  © 2013 Iplace CMS Project & Iplace Hotel           /
     *  ORIGINAL CMS MAKER: JASPER VRIENDS - JASLER.NL    |
     *****************************************************/
     
    $LOGIN_TRUE = true;
    $identyPages = true;
    include("./global.php");
?><html>
<head>
    <title>Babux - Avatars</title>
    <link href="http://25.88.140.109/projects/babux/app/tpl/skins/aura/css/identity_avatars.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo $_WEBSITE["CMS"]["url"] ?>/js/jquery-1.7.1.min.js" ></script>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_WEBSITE["CMS"]["url"] ?>/favicon.ico" />
    
    <script>
        var logged_in = true;
        var user_email = "<?php echo $_USER["PROFILE"]["email"]; ?>";
        var user_email_id = "<?php echo $_USER["PROFILE"]["id"]; ?>";
        var website_path = "http://25.88.140.109/projects/babux/";
    </script>
    <style>
        .clear {
            clear: both;
        }
        
        .play-button-container2 {
            height: 40px;
            padding-top: 10px;
            clear: both;
            width: 160px;
            margin: 4px auto;
            margin-bottom: 20px;
        }
        
        .play-button2 {
            background: transparent url(../images/identity/avatar_select_button.png) no-repeat top left;
            float: left;
            width: 160px;
            height: 40px;
        }
        
        .play-text2 {
            color: #ffffff;
            line-height: 40px;
            text-align: center;
            font-size: 17px;
            padding-left: 5px;
            padding-right: 5px;
        }
        
        .play-button-end2 {
            background: transparent url(../images/identity/avatar_select_button.png) no-repeat top right;
            height: 40px;
            width: 5px;
            margin-left: 160px;
        }
        
        .tsy_bta {
            border-top: 1px dotted #000000;
            border-bottom: 0px;
        }
        
        .logout {
            float: right;
            position: absolute;
            right: 10px;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="select-avatar">
        	<div class="pick-avatar-container clearfix">
                <div class="title">
                    <span class="habblet-close"></span>
                    <h1><?php echo $LANG["identity"]["avatar"]["choose_ava_t"] . " " . $_WEBSITE["HTL"]["name"]; ?></h1>
                </div>
        		<div id="content">
                    <div id="user-info">
                          <img src="https://ssl.facebook.com/pics/q_silhouette.gif"/>
                      <div>
                          <div id="name"><?php echo $_USER["PROFILE"]["email"]; ?></div>
                          <a href="<?php echo $_WEBSITE["CMS"]["url"]; ?>/identity/settings" id="manage-account"><?php echo $LANG["global"]["emailloginchange"]; ?></a> <a href="<?php echo $_WEBSITE["CMS"]["url"]; ?>/logout" class="logout"><?php echo $LANG["global"]["logout"]; ?></a>
                      </div>
                    </div>
                    
                    <?php
                        $getAvatars = $conn->query("SELECT * FROM users WHERE user_id = '". $_USER["PROFILE"]["id"] ."'");
                        $num_avatar = 0;
                        
                        if($getAvatars) {
                            if($getAvatars->num_rows == 0) {
                    ?><a href="<?php echo $_WEBSITE["CMS"]["url"]; ?>/identity/add_avatar">
                        <div class="play-button-container2">
                            <div class="play-button2"><div class="play-text2"><?php echo $LANG["identity"]["avatar"]["createavatar"]; ?></div></div>
                            <div class="play-button-end2"></div>
                        </div>
                    </a>
                    <div class="clear"></div><?php
                            }else{
                                while($getinfo = $getAvatars->fetch_array()) {
                                    $num_avatar++;
                                    
                                    if($num_avatar > 1) {
                                        echo '<hr class="tsy_bta" />';
                                    }
                    ?><div id="first-avatar">
                        <img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure=<?php echo $getinfo["look"] ?>" width="64" height="110"/>
                        <div id="first-avatar-info">
                            <div class="first-avatar-name"><?php echo $getinfo["username"]; ?></div>
                            <div class="first-avatar-lastonline"><?php echo $LANG["identity"]["avatar"]["lasttimeloggedin"]; ?>: <span title="00-00-0000 00:00:00"><?php echo $LANG["global"]["unknown"]; ?></span></div>
                            <a id="first-avatar-play-link" href="<?php echo $_WEBSITE["CMS"]["url"]; ?>/identity/useOrCreateAvatar/<?php echo $getinfo["id"]; ?>">
                                <div class="play-button-container">
                                    <div class="play-button"><div class="play-text"><?php echo $LANG["global"]["play"]; ?></div></div>
                                    <div class="play-button-end"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <?php
                                }
                            }
                        }else{
                            echo $conn->error;
                        }
                    ?>
                    
                    <div id="link-new-avatar">
                        <a class="new-button " onclick="" href="<?php echo $_WEBSITE["CMS"]["url"]; ?>/identity/add_avatar"><b><?php echo $LANG["identity"]["avatar"]["add"]; ?></b><i></i></a>
                    </div>
        
                    <p style="margin: 5px 10px"></p>
                    <div class="clear"></div>
                    <br />
                    <div class="clear"></div>
                    <!--div class="other-avatars">
                        <ul>
                            <li class="even">
                                <img src="http://www.habbo.nl/habbo-imaging/avatar/hr-893-39.hd-180-1.ch-255-63.lg-270-64.sh-300-64.ha-1002-64.ea-1404-62.wa-2007,s-1.g-1.d-4.h-4.a-0,d81eff703b1e7d1098b145013ccbe32e.gif" width="33" height="56">
                                <div class="avatar-info">
                                    <div class="avatar-info-container">
                                        <div class="avatar-name">jasler</div>
                                        <div class="avatar-lastonline">Laatste keer ingelogd: <span title="13-10-13 12:41">Net nog</span></div>
                                    </div>
                                    <div class="avatar-select">
                                        <a href="<?php echo $_WEBSITE["CMS"]["url"]; ?>/identity/useOrCreateAvatar/8606595?disableFriendLinking=true"><b>Speel</b><i></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div-->
                </div>
            </div>
            <div class="pick-avatar-container-bottom"></div>
        </div>
    </div>
    <br />
    <br />
        <?php include("./footer_344.php"); ?>
    </body>
</html>