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
    <title><?php echo $_WEBSITE["HTL"]["name"]; ?> Hotel: Beveiliging</title>
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
            <h1>Beveiliging</h1>
            <div id="back-link"><img src="<?php echo $_WEBSITE["CMS"]["url"]; ?>/images/identity/hotel.png" id="back-to-main" onclick="document.location.href='<?php echo $_WEBSITE["CMS"]["url"]; ?>'" />
                <a href="<?php echo $_WEBSITE["CMS"]["url"]; ?>/identity/avatars">Mijn <?php echo $_WEBSITE["HTL"]["name"]; ?>namen</a> » <a href="settings">E-mail Login beheren</a> » Beveiliging
            </div>
            
            <div style="padding: 0 10px">
                <p>Helaas... Beveiliging veranderen staat niet geactiveerd...</p>
                
                <a class="new-button" href="<?php echo $_WEBSITE["CMS"]["url"]; ?>/identity/settings"><b>Terug</b><i></i></a>
            </div>
        </div>
        <div class="settings-container-bottom">
        </div>
    </div>
    
    <?php include("./footer_344.php"); ?>
</body>
</html>