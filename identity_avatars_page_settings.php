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
    <title><?php echo $_WEBSITE["HTL"]["name"]; ?> Hotel: <?php echo $LANG["identity"]["settings"]["title"]; ?></title>
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
            <h1><?php echo $LANG["identity"]["settings"]["loginpaneltitle"]; ?></h1>
            <div id="back-link"><img src="<?php echo $_WEBSITE["CMS"]["url"]; ?>/images/identity/hotel.png" id="back-to-main" onclick="document.location.href='<?php echo $_WEBSITE["CMS"]["url"]; ?>'" />
                <a href="<?php echo $_WEBSITE["CMS"]["url"]; ?>/identity/avatars"><?php echo $LANG["identity"]["settings"]["mynames"]; ?></a> » <?php echo $LANG["identity"]["settings"]["email_login_toptitle"]; ?>      
            </div>
            
            <div style="padding: 0 10px">
                <p><?php echo $LANG["identity"]["settings"]["toptext"]; ?></p>
                <h3><?php echo $LANG["global"]["email_b"]; ?>:</h3>
                <div class="opt-email">
                    <span><?php echo $_USER["PROFILE"]["email"]; ?></span>
                    <a id="manage-email" class="new-button " onclick="" href="<?php echo $_WEBSITE["CMS"]["url"]; ?>/identity/email"><b><?php echo $LANG["identity"]["settings"]["manageemailadd"]; ?></b><i></i></a>
                </div>
                
                <!--br clear="all" />
                <h3>Je account beveiligen</h3>
                <div class="opt-email">
                    <a id="manage-safety-questions" class="new-button " onclick="" href="<?php echo $_WEBSITE["CMS"]["url"]; ?>/identity/safetyquestions"><b>Bewerk je beveiligingsvragen</b><i></i></a>
                </div-->
                <br />
                <h3><?php echo $LANG["identity"]["settings"]["loginmethodes"]; ?>:</h3>
                <p><?php echo $LANG["identity"]["settings"]["loginmethodes_text"]; ?></p>
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
                            ?><br />
                            <?php echo $LANG["identity"]["settings"]["logging_in_via_email_enabled"]; ?><br /><?php
                        }else{
                            ?><br />
                            <?php echo $LANG["identity"]["settings"]["logging_in_via_email_not_enabled"]; ?><br /><?php
                        }
                    ?>
                    
                </div>
                <br clear="all" />
                <a id="manage-auth-providers" class="new-button " onclick="" href="<?php echo $_WEBSITE["CMS"]["url"]; ?>/identity/auth"><b><?php echo $LANG["identity"]["settings"]["change_loginmethods"]; ?></b><i></i></a>
                <br clear="all" />
                
                <h3><?php echo $LANG["global"]["password"]; ?>:</h3>
                <div class="opt-password">
                    <span>**************</span>
                    <a id="manage-password" class="new-button" href="<?php echo $_WEBSITE["CMS"]["url"]; ?>/identity/password"><b><?php echo $LANG["global"]["change"]; ?></b><i></i></a>
                </div>
                <br />
                <p><?php echo $LANG["identity"]["settings"]["settings_question"]; ?></p>
            </div>
        </div>
        <div class="settings-container-bottom">
        </div>
    </div>
    
    <?php include("./footer_344.php"); ?>
</body>
</html>