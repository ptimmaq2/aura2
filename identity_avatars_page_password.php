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
    
    $ChangePassword["email"] = getInformationUSR($_SESSION['remember_me_email'], "email");
    $ChangePassword["password"] = getInformationUSR($_SESSION['remember_me_email'], "password");
    $ChangePassword["birthDay"] = getInformationUSR($_SESSION['remember_me_email'], "birthday_1");
    $ChangePassword["birthMonth"] = getInformationUSR($_SESSION['remember_me_email'], "birthday_2");
    $ChangePassword["birthYear"] = getInformationUSR($_SESSION['remember_me_email'], "birthday_3");
    
    // Check form sent
    if(isset($_POST["changePassword"])) {
        $errorSent = false;
        $error = "";
        // Get all sent variables
        $emailCheck = $_POST["email"];
        $ThePassword = hash_Password($_POST["password"], $_WEBSITE["CMS"]["psswd_hash"]);
        $ThePasswordTwo = $_POST["passwordNew"];
        $ThePasswordTwoRepeat = $_POST["passwordNewRepeat"];
        $TheBirth1 = $_POST["birthday_1"];
        $TheBirth2 = $_POST["birthday_2"];
        $TheBirth3 = $_POST["birthday_3"];
        
        if($emailCheck !== $ChangePassword["email"]) {
            $error = $LANG["identity"]["passwordchange"]["error_1"];
            $errorSent = true;
        }
        
        if($ThePassword !== $ChangePassword["password"]) {
            if($errorSent == true) {
                $error.= '<br />';
            }
            $error .= $LANG["identity"]["passwordchange"]["error_2"];
            $errorSent = true;
        }
        
        if($TheBirth1 !== $ChangePassword["birthDay"] || $TheBirth2 !== $ChangePassword["birthMonth"] || $TheBirth3 !== $ChangePassword["birthYear"]) {
            if($errorSent == true) {
                $error.= '<br />';
            }
            $error .= $LANG["identity"]["passwordchange"]["error_3"];
            $errorSent = true;
        }
        
        // Check passwords are the same
        if($ThePasswordTwo !== $ThePasswordTwoRepeat) {
            if($errorSent == true) {
                $error.= '<br />';
            }
            $error .= $LANG["identity"]["passwordchange"]["error_4"];
            $errorSent = true;
        }
        
        // Check passwords are the same
        if(strlen($ThePasswordTwo) < 6 ) {
            if($errorSent == true) {
                $error.= '<br />';
            }
            $error .= $LANG["identity"]["passwordchange"]["error_5"];
            $errorSent = true;
        }
        
        if($errorSent == false) {
            if(hash_Password($ThePasswordTwo, $_WEBSITE["CMS"]["psswd_hash"]) == $ChangePassword["password"]) {
                $errorSent = true;
                $error = $LANG["identity"]["passwordchange"]["error_6"];
            }else{
                $ThePasswordTwo = sql_stripslashes($ThePasswordTwo);
                $ThePasswordTwo = hash_Password($ThePasswordTwo, $_WEBSITE["CMS"]["psswd_hash"]);
                $updateThePassw = $conn->query("UPDATE users_spec SET password = '". $ThePasswordTwo ."'
                                                WHERE id = ". $_USER["PROFILE"]["id"] ."");
            
                if($conn->error) {
                    echo errorCMS('Error: ' . $conn->error . "<br />Go to website owners");
                    die;
                }else{
                    $successs = true;
                }
            }
        }
    }
?><html>
<head>
    <title><?php echo $_WEBSITE["HTL"]["name"]; ?> Hotel: <?php echo $LANG["identity"]["passwordchange"]["title"]; ?></title>
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
        .textOrpasswordT {
            width: 100%;
            padding: 5px;
            border: 1px solid #D0D0D0;
            font-size: 15px;
        }
        
        .birthday_check {
            padding: 10px;
            
        }
        
        .birthday_check select {
            padding: 5px;
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
    </style>
</head>
<body>
    <div id="container">
        <div class="settings-container clearfix">
            <h1><?php echo $LANG["identity"]["passwordchange"]["title"]; ?></h1>
            <div id="back-link"><img src="<?php echo $_WEBSITE["CMS"]["url"]; ?>/images/identity/hotel.png" id="back-to-main" onclick="document.location.href='<?php echo $_WEBSITE["CMS"]["url"]; ?>'" />
                <a href="<?php echo $_WEBSITE["CMS"]["url"]; ?>/identity/avatars"><?php echo $LANG["identity"]["settings"]["mynames"]; ?></a> » <a href="settings"><?php echo $LANG["identity"]["settings"]["email_login_toptitle"]; ?></a> » <?php echo $LANG["global"]["password"]; ?>
            </div>
            
            <div style="padding: 0 10px">
                <p><b><?php echo $LANG["identity"]["passwordchange"]["title"]; ?></b></p>
                <p><?php echo $LANG["identity"]["passwordchange"]["change_pass_text"]; ?></p>
                
                <p><b><?php echo $LANG["identity"]["emailchange"]["title_whybirthday"]; ?></b></p>
                <p><?php echo $LANG["identity"]["emailchange"]["text_whybirthday"]; ?></p>
                <?php
                    if(isset($errorSent) && $errorSent == true) {
                        ?><div class="error"><b><?php echo $LANG["global"]["somethingwrong"]; ?>:</b><br /><?php
                            echo $error;
                        ?></div><?php
                    }
                ?>
                <?php
                    if(isset($successs) && $successs == true) {
                        ?><div class="error_green"><b><?php echo $LANG["global"]["done"]; ?>!</b><br />
                            <?php echo $LANG["identity"]["passwordchange"]["success_change"]; ?></i>
                        </div><br /><?php
                    }else{
                ?>
                <br />
                <form method="POST" autocomplete="off">
                    <p><b><?php echo $LANG["identity"]["passwordchange"]["title"]; ?></b></p>
                    <p><?php echo $LANG["identity"]["passwordchange"]["enter_acc_email"]; ?>:</p>
                    <input type="text" placeholder="<?php echo $LANG["identity"]["passwordchange"]["enter_acc_email"]; ?>" class="textOrpasswordT" name="email"<?php
                    if(isset($_POST["email"])) {
                        	   echo ' value="'. $_POST["email"] .'"';
                        	} ?> />
                    <p><?php echo $LANG["identity"]["passwordchange"]["enter_old_pass"]; ?>:</p>
                    <input type="password" placeholder="<?php echo $LANG["identity"]["passwordchange"]["enter_old_pass"]; ?>" class="textOrpasswordT" name="password" />
                    <p><?php echo $LANG["identity"]["passwordchange"]["enter_new_pass"]; ?>:</p>
                    <input type="password" placeholder="<?php echo $LANG["identity"]["passwordchange"]["enter_new_pass"]; ?>" class="textOrpasswordT" name="passwordNew" />
                    <p><?php echo $LANG["identity"]["passwordchange"]["enter_repeat_pass"]; ?>:</p>
                    <input type="password" placeholder="<?php echo $LANG["identity"]["passwordchange"]["enter_repeat_pass"]; ?>" class="textOrpasswordT" name="passwordNewRepeat" />
                    <br />
                    <div class="birthday_check">
                        <select size="1" style="width: 100px;" id="birthday_1" name="birthday_1">
                        	<option value="00"><?php echo $LANG["global"]["choose"]; ?></option>
                        	<option value="01" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "01") {
                        	   echo ' selected=""';
                        	} ?>>01</option>
                        	<option value="02" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "02") {
                        	   echo ' selected=""';
                        	} ?>>02</option>
                        	<option value="03" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "03") {
                        	   echo ' selected=""';
                        	} ?>>03</option>
                        	<option value="04" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "04") {
                        	   echo ' selected=""';
                        	} ?>>04</option>
                        	<option value="05" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "05") {
                        	   echo ' selected=""';
                        	} ?>>05</option>
                        	<option value="06" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "06") {
                        	   echo ' selected=""';
                        	} ?>>06</option>
                        	<option value="07" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "07") {
                        	   echo ' selected=""';
                        	} ?>>07</option>
                        	<option value="08" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "05") {
                        	   echo ' selected=""';
                        	} ?>>08</option>
                        	<option value="09" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "09") {
                        	   echo ' selected=""';
                        	} ?>>09</option>
                        	<option value="10" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "10") {
                        	   echo ' selected=""';
                        	} ?>>10</option>
                        	<option value="11" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "11") {
                        	   echo ' selected=""';
                        	} ?>>11</option>
                        	<option value="12" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "12") {
                        	   echo ' selected=""';
                        	} ?>>12</option>
                        	<option value="13" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "13") {
                        	   echo ' selected=""';
                        	} ?>>13</option>
                        	<option value="14" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "14") {
                        	   echo ' selected=""';
                        	} ?>>14</option>
                        	<option value="15" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "15") {
                        	   echo ' selected=""';
                        	} ?>>15</option>
                        	<option value="16" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "16") {
                        	   echo ' selected=""';
                        	} ?>>16</option>
                        	<option value="17" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "17") {
                        	   echo ' selected=""';
                        	} ?>>17</option>
                        	<option value="18" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "18") {
                        	   echo ' selected=""';
                        	} ?>>18</option>
                        	<option value="19" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "19") {
                        	   echo ' selected=""';
                        	} ?>>19</option>
                        	<option value="20" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "20") {
                        	   echo ' selected=""';
                        	} ?>>20</option>
                        	<option value="21" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "21") {
                        	   echo ' selected=""';
                        	} ?>>21</option>
                        	<option value="22" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "22") {
                        	   echo ' selected=""';
                        	} ?>>22</option>
                        	<option value="23" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "23") {
                        	   echo ' selected=""';
                        	} ?>>23</option>
                        	<option value="24" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "24") {
                        	   echo ' selected=""';
                        	} ?>>24</option>
                        	<option value="25" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "25") {
                        	   echo ' selected=""';
                        	} ?>>25</option>
                        	<option value="26" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "26") {
                        	   echo ' selected=""';
                        	} ?>>26</option>
                        	<option value="27" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "27") {
                        	   echo ' selected=""';
                        	} ?>>27</option>
                        	<option value="28" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "28") {
                        	   echo ' selected=""';
                        	} ?>>28</option>
                        	<option value="29" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "29") {
                        	   echo ' selected=""';
                        	} ?>>29</option>
                        	<option value="30" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "30") {
                        	   echo ' selected=""';
                        	} ?>>30</option>
                        	<option value="31" <?php if(isset($_POST["birthday_1"])
                                                           && $_POST["birthday_1"] == "31") {
                        	   echo ' selected=""';
                        	} ?>>31</option>
                        </select>
                        
                        
                        
                        <select size="1" style="width: 100px;" id="birthday_2" name="birthday_2">
                        	<option value="00"><?php echo $LANG["global"]["choose"]; ?></option>
                        	<option value="01" <?php if(isset($_POST["birthday_2"])
                                                           && $_POST["birthday_2"] == "01") {
                        	   echo ' selected=""';
                        	} ?>><?php echo $LANG["global"]["date"]["month"]["01"]; ?></option>
                        	<option value="02" <?php if(isset($_POST["birthday_2"])
                                                           && $_POST["birthday_2"] == "02") {
                        	   echo ' selected=""';
                        	} ?>><?php echo $LANG["global"]["date"]["month"]["02"]; ?></option>
                        	<option value="03" <?php if(isset($_POST["birthday_2"])
                                                           && $_POST["birthday_2"] == "03") {
                        	   echo ' selected=""';
                        	} ?>><?php echo $LANG["global"]["date"]["month"]["03"]; ?></option>
                        	<option value="04" <?php if(isset($_POST["birthday_2"])
                                                           && $_POST["birthday_2"] == "04") {
                        	   echo ' selected=""';
                        	} ?>><?php echo $LANG["global"]["date"]["month"]["04"]; ?></option>
                        	<option value="05" <?php if(isset($_POST["birthday_2"])
                                                           && $_POST["birthday_2"] == "05") {
                        	   echo ' selected=""';
                        	} ?>><?php echo $LANG["global"]["date"]["month"]["05"]; ?></option>
                        	<option value="06" <?php if(isset($_POST["birthday_2"])
                                                           && $_POST["birthday_2"] == "06") {
                        	   echo ' selected=""';
                        	} ?>><?php echo $LANG["global"]["date"]["month"]["06"]; ?></option>
                        	<option value="07" <?php if(isset($_POST["birthday_2"])
                                                           && $_POST["birthday_2"] == "07") {
                        	   echo ' selected=""';
                        	} ?>><?php echo $LANG["global"]["date"]["month"]["07"]; ?></option>
                        	<option value="08" <?php if(isset($_POST["birthday_2"])
                                                           && $_POST["birthday_2"] == "08") {
                        	   echo ' selected=""';
                        	} ?>><?php echo $LANG["global"]["date"]["month"]["08"]; ?></option>
                        	<option value="09" <?php if(isset($_POST["birthday_2"])
                                                           && $_POST["birthday_2"] == "09") {
                        	   echo ' selected=""';
                        	} ?>><?php echo $LANG["global"]["date"]["month"]["09"]; ?></option>
                        	<option value="10" <?php if(isset($_POST["birthday_2"])
                                                           && $_POST["birthday_2"] == "10") {
                        	   echo ' selected=""';
                        	} ?>><?php echo $LANG["global"]["date"]["month"]["10"]; ?></option>
                        	<option value="11" <?php if(isset($_POST["birthday_2"])
                                                           && $_POST["birthday_2"] == "11") {
                        	   echo ' selected=""';
                        	} ?>><?php echo $LANG["global"]["date"]["month"]["11"]; ?></option>
                        	<option value="12" <?php if(isset($_POST["birthday_2"])
                                                           && $_POST["birthday_2"] == "12") {
                        	   echo ' selected=""';
                        	} ?>><?php echo $LANG["global"]["date"]["month"]["12"]; ?></option>
                        </select>
                        
                        <select size="1" style="width: 150px;" id="birthday_3" name="birthday_3">
                        	<option value="00"><?php echo $LANG["global"]["choose"]; ?></option>
                        	<option value="2014" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "2014") {
                        	   echo ' selected=""';
                        	} ?>>2014</option>
                        	<option value="2013" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "2014") {
                        	   echo ' selected=""';
                        	} ?>>2013</option>
                        	<option value="2013" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "2013") {
                        	   echo ' selected=""';
                        	} ?>>2013</option>
                        	<option value="2012" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "2012") {
                        	   echo ' selected=""';
                        	} ?>>2012</option>
                        	<option value="2011" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "2011") {
                        	   echo ' selected=""';
                        	} ?>>2011</option>
                        	<option value="2010" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "2010") {
                        	   echo ' selected=""';
                        	} ?>>2010</option>
                        	<option value="2009" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "2009") {
                        	   echo ' selected=""';
                        	} ?>>2009</option>
                        	<option value="2008" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "2008") {
                        	   echo ' selected=""';
                        	} ?>>2008</option>
                        	<option value="2007" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "2007") {
                        	   echo ' selected=""';
                        	} ?>>2007</option>
                        	<option value="2006" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "2006") {
                        	   echo ' selected=""';
                        	} ?>>2006</option>
                        	<option value="2005" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "2005") {
                        	   echo ' selected=""';
                        	} ?>>2005</option>
                        	<option value="2004" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "2004") {
                        	   echo ' selected=""';
                        	} ?>>2004</option>
                        	<option value="2003" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "2003") {
                        	   echo ' selected=""';
                        	} ?>>2003</option>
                        	<option value="2002" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "2002") {
                        	   echo ' selected=""';
                        	} ?>>2002</option>
                        	<option value="2001" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "2001") {
                        	   echo ' selected=""';
                        	} ?>>2001</option>
                        	<option value="2000" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "2000") {
                        	   echo ' selected=""';
                        	} ?>>2000</option>
                            <option value="1999" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1999") {
                        	   echo ' selected=""';
                        	} ?>>1999</option>
                            <option value="1998" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1998") {
                        	   echo ' selected=""';
                        	} ?>>1998</option>
                            <option value="1997" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1997") {
                        	   echo ' selected=""';
                        	} ?>>1997</option>
                            <option value="1996" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1996") {
                        	   echo ' selected=""';
                        	} ?>>1996</option>
                            <option value="1995" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1995") {
                        	   echo ' selected=""';
                        	} ?>>1995</option>
                            <option value="1994" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1994") {
                        	   echo ' selected=""';
                        	} ?>>1994</option>
                            <option value="1993" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1993") {
                        	   echo ' selected=""';
                        	} ?>>1993</option>
                            <option value="1992" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1992") {
                        	   echo ' selected=""';
                        	} ?>>1992</option>
                            <option value="1991" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1991") {
                        	   echo ' selected=""';
                        	} ?>>1991</option>
                            <option value="1990" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1990") {
                        	   echo ' selected=""';
                        	} ?>>1990</option>
                            <option value="1989" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1989") {
                        	   echo ' selected=""';
                        	} ?>>1989</option>
                            <option value="1988" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1988") {
                        	   echo ' selected=""';
                        	} ?>>1988</option>
                            <option value="1987" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1987") {
                        	   echo ' selected=""';
                        	} ?>>1987</option>
                            <option value="1986" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1986") {
                        	   echo ' selected=""';
                        	} ?>>1986</option>
                            <option value="1985" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1985") {
                        	   echo ' selected=""';
                        	} ?>>1985</option>
                            <option value="1984" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1984") {
                        	   echo ' selected=""';
                        	} ?>>1984</option>
                            <option value="1983" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1983") {
                        	   echo ' selected=""';
                        	} ?>>1983</option>
                            <option value="1982" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1982") {
                        	   echo ' selected=""';
                        	} ?>>1982</option>
                            <option value="1981" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1981") {
                        	   echo ' selected=""';
                        	} ?>>1981</option>
                            <option value="1980" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1980") {
                        	   echo ' selected=""';
                        	} ?>>1980</option>
                            <option value="1979" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1979") {
                        	   echo ' selected=""';
                        	} ?>>1979</option>
                            <option value="1978" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1978") {
                        	   echo ' selected=""';
                        	} ?>>1978</option>
                            <option value="1977" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1977") {
                        	   echo ' selected=""';
                        	} ?>>1977</option>
                            <option value="1976" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1976") {
                        	   echo ' selected=""';
                        	} ?>>1976</option>
                            <option value="1975" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1975") {
                        	   echo ' selected=""';
                        	} ?>>1975</option>
                            <option value="1974" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1974") {
                        	   echo ' selected=""';
                        	} ?>>1974</option>
                            <option value="1973" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1973") {
                        	   echo ' selected=""';
                        	} ?>>1973</option>
                            <option value="1972" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1972") {
                        	   echo ' selected=""';
                        	} ?>>1972</option>
                            <option value="1971" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1971") {
                        	   echo ' selected=""';
                        	} ?>>1971</option>
                            <option value="1970" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1970") {
                        	   echo ' selected=""';
                        	} ?>>1970</option>
                            <option value="1969" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1969") {
                        	   echo ' selected=""';
                        	} ?>>1969</option>
                            <option value="1968" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1968") {
                        	   echo ' selected=""';
                        	} ?>>1968</option>
                            <option value="1967" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1967") {
                        	   echo ' selected=""';
                        	} ?>>1967</option>
                            <option value="1966" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1966") {
                        	   echo ' selected=""';
                        	} ?>>1966</option>
                            <option value="1965" <?php if(isset($_POST["birthday_3"])
                                                           && $_POST["birthday_3"] == "1965") {
                        	   echo ' selected=""';
                        	} ?>>1965</option>
                         </select>
                    </div>
                    
                    <p><small><b><?php echo $LANG["identity"]["emailchange"]["help_title"]; ?></b> <?php echo $LANG["identity"]["emailchange"]["help_text"]; ?></small></p>
                    
                    <p></p>
                    <?php
                        }
                    ?>
                    <a class="new-button" href="<?php echo $_WEBSITE["CMS"]["url"]; ?>/identity/settings" style="float: left;"><b><?php echo $LANG["global"]["back"]; ?></b><i></i></a>
                    <?php
                        if(isset($successs) && $successs == true) { }else{
                    ?><button class="new-button" type="submit" name="changePassword"><b><?php echo $LANG["global"]["send"]; ?></b><i></i></a><?php } ?>
            </div>
        </div>
        <div class="settings-container-bottom">
        </div>
    </div>
    
    <?php include("./footer_344.php"); ?>
</body>
</html>