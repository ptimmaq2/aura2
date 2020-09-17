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
    <title><?php echo $_WEBSITE["HTL"]["name"]; ?> Hotel: <?php echo $LANG["identity"]["newavatar"]["title"]; ?></title>
    <link href="<?php echo $_WEBSITE["CMS"]["url"] ?>/css/identity_set.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo $_WEBSITE["CMS"]["url"] ?>/js/jquery-1.7.1.min.js" ></script>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_WEBSITE["CMS"]["url"] ?>/favicon.ico" />
    
    <script>
        var logged_in = true;
        var user_email = "<?php echo $_USER["PROFILE"]["email"]; ?>";
        var user_email_id = "<?php echo $_USER["PROFILE"]["id"]; ?>";
        var website_path = "<?php echo $_WEBSITE["CMS"]["url"] ?>";
    </script>
<style>
/**
 * Some changes
 */
#container, #header, #navi2-container {
    margin: 0 auto;
    text-align: left;
    z-index: 8999;
    width: 342px;
}

.settings-container {
    background: transparent url(../images/identity/register_bg3.png) no-repeat top left;
    width: 342px;
}

.settings-container-bottom {
    background: transparent url(../images/identity/register_bg3.png) no-repeat bottom left;
    height: 10px;
}

.textOrpasswordT {
    width: 100%;
    padding: 5px;
    border: 1px solid #D0D0D0;
    font-size: 15px;
}

.error {
    background: #FFCFCF;
    border: 1px solid #FF0000;
    color: #FF0000;
    padding: 5px;
}

.error_green {
    background: #DCFFE0;
    border: 1px solid #01D016;
    color: #01D016;
    padding: 5px;
}

.loading {
    background: #FFFFFF url('<?php echo $_WEBSITE["CMS"]["url"] ?>/images/loaders/5.gif') 7px center no-repeat;
    border: 1px solid #EAEAEA;
    color: #000000;
    padding: 5px;
    padding-left: 50px;
}
</style>

<script>
var nameGood = false;
var avatar_g = "<?php if(isset($_GET["bean_gender"]) && $_GET["bean_gender"] == "m") { echo "M"; }else{ echo 'F'; } ?>";
var avatar_p = "<?php if(isset($_GET["checkFigureOnly"]) && $_GET["checkFigureOnly"] == true) { echo $_GET["bean_figure"]; }else { echo 'ch-820-1315-102.hd-3098-1.lg-3061-102.hr-3251-39-31.sh-3206-102'; } ?>";

$(document).ready(function() {
    $("#addAvatar").click(function() {
        addNewAccount5();
    });
    
    $("#checkUsername").click(function() {
        checkUserName();
    });
    <?php
        if(isset($_GET["recheck"]) && $_GET["recheck"] == true) {
            echo 'checkUserName();';
        }
    ?> 
});

function addNewAccount5() {
    var username = $("#username").val();
    if(nameGood == true) {
        $.ajax({
            url: "<?php echo $_WEBSITE["CMS"]["url"] ?>/ajax/loginregi.php",
            type: "POST",
            data: { action: "addavatar", av_username: username, av_id_owner: user_email_id, av_avatar_g: avatar_g, av_avatar_p: avatar_p },
            success: function(data) {
                if(data == "done") {
                    window.location.href = "<?php echo $_WEBSITE["CMS"]["url"] ?>/identity/avatars";
                }else{
                    alert("Error:\n" + data + "\n\nContact owners!");
                }
            }
        });
    }else{
        $(".error_username_check").fadeIn();
    }
}

function checkUserName() {
    var username = $("#username").val();
    $(".good_username_ok").fadeOut();
    $(".error_username_exists").fadeOut();
    $(".error_username_check").fadeOut();
    $(".error_username_short").fadeOut();
    $(".checkingUsername").fadeIn();
    $.ajax({
        url: "<?php echo $_WEBSITE["CMS"]["url"] ?>/ajax/loginregi.php",
        type: "POST",
        data: { action: "checkusername", av_username: username },
        success: function(data) {
            $(".checkingUsername").fadeOut();
            if(data == "exists") {
                $(".error_username_exists").fadeIn();
                nameGood = false;
            }else if(data == "short"){
                $(".error_username_short").fadeIn();
                nameGood = false;
            }else if(data == "good"){
                $(".good_username_ok").fadeIn();
                nameGood = true;
            }else{
                alert("Error:\n" + data + "\n\nContact owners!");
                nameGood = false;
            }
        }
    });
}
    
var changeAvatar = function(url) {
    document.location.href = url + "&username=" + $("#username").val() + "&recheck=true";
};
</script>
</head>
<body>
    <div id="container">
        <div class="settings-container clearfix">
            <h1><?php echo $LANG["identity"]["newavatar"]["title"]; ?></h1>
            <div id="back-link"><img src="<?php echo $_WEBSITE["CMS"]["url"]; ?>/images/identity/hotel.png" id="back-to-main" onclick="document.location.href='<?php echo $_WEBSITE["CMS"]["url"]; ?>'" />
                <a href="<?php echo $_WEBSITE["CMS"]["url"]; ?>/identity/avatars"><?php echo $LANG["identity"]["settings"]["mynames"]; ?></a> » <?php echo $LANG["identity"]["newavatar"]["newname"]; ?>
            </div>
            
            <div style="padding: 0 10px">
                <p><?php echo $LANG["identity"]["newavatar"]["newavatar_info"]; ?></p>
                
                <div class="loading checkingUsername" style="display: none;"><b><?php echo $LANG["identity"]["newavatar"]["error_1_title"]; ?></b><br />
                <?php echo $LANG["identity"]["newavatar"]["error_1_text"] ?></div>
                
                <div class="error error_username_check" style="display: none;"><b><?php echo $LANG["identity"]["newavatar"]["error_2_title"]; ?></b><br />
                <?php echo $LANG["identity"]["newavatar"]["error_2_text"]; ?></div>
                
                <div class="error error_username_exists" style="display: none;"><b><?php echo $LANG["identity"]["newavatar"]["error_3_title"]; ?></b><br />
                <?php echo $LANG["identity"]["newavatar"]["error_3_text"]; ?></div>
                
                <div class="error_green good_username_ok" style="display: none;"><b><?php echo $LANG["identity"]["newavatar"]["error_4_title"]; ?></b><br />
                <?php echo $LANG["identity"]["newavatar"]["error_4_text"]; ?></div>
                
                <div class="error error_username_short" style="display: none;"><b><?php echo $LANG["identity"]["newavatar"]["error_5_title"]; ?></b><br />
                <?php echo $LANG["identity"]["newavatar"]["error_5_text"]; ?></div>
                
                <br clear="all" />
                <h3><?php echo $LANG["identity"]["newavatar"]["hotelavatarname"]; ?>:</h3>
                <input type="text" value="<?php if(isset($_GET["username"])) { echo $_GET["username"]; } ?>" id="username" name="username" class="textOrpasswordT" style="width: 220px;" placeholder="<?php echo $LANG["identity"]["newavatar"]["hotelavatarname"]; ?>" />
                <a id="checkUsername" class="new-button " onclick="" style="margin-right: 5px;"><b><?php echo $LANG["global"]["check"]; ?></b><i></i></a> 
                <p class="help"><?php echo $LANG["identity"]["newavatar"]["avatar_char_info"]; ?></p>
                <br />
                <div id="avatar-field-container" class="clearfix">                <div id="selected-avatar">
                    <h3>Preview</h3>
                        <img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure=<?php if($_GET["checkFigureOnly"] == true) { echo $_GET["bean_figure"]; }else { echo 'ch-820-1315-102.hd-3098-1.lg-3061-102.hr-3251-39-31.sh-3206-102'; } ?>" width="64" height="110" />
                    </div>
                    <div id="avatar-choices">
                        <h3><?php echo $LANG["global"]["girls"]; ?></h3>
                        <a href="javascript:changeAvatar('<?php echo $_WEBSITE["CMS"]["url"] ?>/identity/add_avatar?bean_figure=ch-820-1315-102.hd-3098-1.lg-3061-102.hr-3251-39-31.sh-3206-102&amp;bean_gender=f&amp;checkFigureOnly=true');" class="female-avatar" rel="hr-545-31.hd-620-4.ch-630-81.lg-715-63.sh-725-62">
                            <img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure=ch-820-1315-102.hd-3098-1.lg-3061-102.hr-3251-39-31.sh-3206-102" width="33" height="56">
                        </a>
                        <a href="javascript:changeAvatar('<?php echo $_WEBSITE["CMS"]["url"] ?>/identity/add_avatar?bean_figure=hr-545-34.hd-600-1.ch-630-62.lg-715-63.sh-735-63.he-1605-73.ca-1813-,s-0.g-0.d-4.h-4.a-0,228ae5f22c25fbc4f4371c0153b3a714&amp;bean_gender=f&amp;checkFigureOnly=true');" class="female-avatar" rel="hr-545-31.hd-620-4.ch-630-81.lg-715-63.sh-725-62">
                            <img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure=hr-545-34.hd-600-1.ch-630-62.lg-715-63.sh-735-63.he-1605-73.ca-1813-,s-0.g-0.d-4.h-4.a-0,228ae5f22c25fbc4f4371c0153b3a714" width="33" height="56">
                        </a>
    
                        <h3><?php echo $LANG["global"]["boys"]; ?></h3>
                        <a href="javascript:changeAvatar('<?php echo $_WEBSITE["CMS"]["url"] ?>/identity/add_avatar?bean_figure=hd-180-1.sh-3206-101.hr-155-39.ea-1404-62.ch-3208-102-1315.ca-3219-110.lg-285-102&amp;bean_gender=m&amp;checkFigureOnly=true');" class="male-avatar" rel="hr-893-40.hd-180-22.ch-255-62.lg-3116-62-64.sh-295-62">
                            <img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure=hd-180-1.sh-3206-101.hr-155-39.ea-1404-62.ch-3208-102-1315.ca-3219-110.lg-285-102" width="33" height="56">
                        </a>
                        <a href="javascript:changeAvatar('<?php echo $_WEBSITE["CMS"]["url"] ?>/identity/add_avatar?bean_figure=hr-893-39.hd-180-1.ch-255-63.lg-270-64.sh-300-64.ha-1002-64.ea-1404-62.wa-2007,s-0.g-0.d-4.h-4.a-0,090d458e1fb2b660030b11ba43a0409a&amp;bean_gender=m&amp;checkFigureOnly=true');" class="male-avatar" rel="hr-893-40.hd-180-22.ch-255-62.lg-3116-62-64.sh-295-62">
                            <img src="http://www.habbo.nl/habbo-imaging/avatarimage?figure=hr-893-39.hd-180-1.ch-255-63.lg-270-64.sh-300-64.ha-1002-64.ea-1404-62.wa-2007,s-0.g-0.d-4.h-4.a-0,090d458e1fb2b660030b11ba43a0409a" width="33" height="56">
                        </a>
                        <p style="clear: left;"><?php echo $LANG["identity"]["newavatar"]["youcanchangelook"] ?></p>
                    </div>
                </div>
                <a id="addAvatar" class="new-button " onclick="" href="javascript:void(0)"><b><?php echo $LANG["identity"]["newavatar"]["createavatar"]; ?></b><i></i></a>
            </div>
        </div>
        <div class="settings-container-bottom">
        </div>
    </div>
    
    <?php include("./footer_344.php"); ?>
</body>
</html>