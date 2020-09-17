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
    <title><?php echo $_WEBSITE["HTL"]["name"]; ?> Hotel: <?php echo $LANG["identity"]["loginmethods"]["title"]; ?></title>
    <link href="<?php echo $_WEBSITE["CMS"]["url"] ?>/css/identity_set.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo $_WEBSITE["CMS"]["url"] ?>/js/jquery-1.7.1.min.js" ></script>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_WEBSITE["CMS"]["url"] ?>/favicon.ico" />
    
    <script>
        var logged_in = true;
        var user_email = "<?php echo $_USER["PROFILE"]["email"]; ?>";
        var user_email_id = "<?php echo $_USER["PROFILE"]["id"]; ?>";
        var website_path = "<?php echo $_WEBSITE["CMS"]["url"] ?>";
    </script>
</head>
<body>
    <div id="container">
        <div class="settings-container clearfix">
            <h1><?php echo $LANG["identity"]["loginmethods"]["title"]; ?></h1>
            <div id="back-link"><img src="<?php echo $_WEBSITE["CMS"]["url"]; ?>/images/identity/hotel.png" id="back-to-main" onclick="document.location.href='<?php echo $_WEBSITE["CMS"]["url"]; ?>'" />
                <a href="<?php echo $_WEBSITE["CMS"]["url"]; ?>/identity/avatars"><?php echo $LANG["identity"]["settings"]["mynames"]; ?></a> » <a href="settings"><?php echo $LANG["identity"]["settings"]["email_login_toptitle"]; ?></a> » <?php echo $LANG["identity"]["loginmethods"]["title"]; ?>
            </div>
            
            <div style="padding: 0 10px">
                <p><b><?php echo $LANG["identity"]["loginmethods"]["loginviausernameormail"]; ?></b></p>
                <p><?php echo $LANG["identity"]["loginmethods"]["loginviausernameormail_text"]; ?></p>
                
                <p><b><?php echo $LANG["identity"]["loginmethods"]["emailmethod"]; ?></b></p>
                <p><?php echo $LANG["identity"]["loginmethods"]["emailmethod_text"]; ?></p>
                
                <p><b><?php echo $LANG["identity"]["loginmethods"]["usernamemethod"]; ?></b></p>
                <?php echo $LANG["identity"]["loginmethods"]["usernamemethod_text"]; ?>
                <br />
                
                <br />
                <div class="opt-auth-providers clearfix settings-auth" style="float: none; width: auto">        
                    <p>
                   	    <img src="<?php echo $_WEBSITE["CMS"]["url"]; ?>/images/identity/icon_habbo_big.png" style="vertical-align: middle" title="<?php echo $LANG["global"]["email"]; ?>" />
                       	<?php echo $_USER["PROFILE"]["email"]; ?>
      		 			<span class="last-access-time">
   					        <?php echo $LANG["identity"]["settings"]["loginmethodes_loginviamail"]; ?>
       					</span>
                    </p>
                    <?php
                        if($_WEBSITE["CMS"]["login_username"] == true) {
                        $getAllAvatarNames = $conn->query("SELECT * FROM users WHERE user_id = '". $_USER["PROFILE"]["id"] ."'");
                        
                            while($infot4 = $getAllAvatarNames->fetch_array()) {
                                ?><p>
                   	    <img src="<?php echo $_WEBSITE["CMS"]["url"]; ?>/images/identity/icon_habbo_big.png" style="vertical-align: middle" title="<?php echo $LANG["global"]["username"]; ?>" />
                       	<?php echo $infot4["username"]; ?>
      		 			<span class="last-access-time">
   					        <?php echo $LANG["identity"]["settings"]["loginmethodes_loginviausername"]; ?>
       					</span>
                    </p><?php
                            }
                        }else{
                            ?><br />
                            <?php echo $LANG["identity"]["settings"]["logging_in_via_email_not_enabled"]; ?><br /><?php
                        }
                    ?>
                    
                </div>
                
                <a class="new-button" href="<?php echo $_WEBSITE["CMS"]["url"]; ?>/identity/settings"><b><?php echo $LANG["global"]["back"]; ?></b><i></i></a><br />
                <br clear="all" />
                <small><?php echo $LANG["identity"]["loginmethods"]["moreinfo"]; ?></small>
            </div>
        </div>
        <div class="settings-container-bottom">
        </div>
    </div>
    
    <?php include("./footer_344.php"); ?>
</body>
</html>