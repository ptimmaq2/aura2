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
    
    $getMyAvatarID = $_GET["avatar_md5"];
    $getMyAvatarID = sql_stripslashes($getMyAvatarID);
    
    $get_t = $conn->query("SELECT * FROM users WHERE id = '". $getMyAvatarID ."' AND user_id = '". $_USER["PROFILE"]["id"] ."'");
    
    if(!$get_t) {
        echo '<b>Error!</b> ';
        echo $conn->error;
        echo '<br /><br /><a href="/">Naar home pagina</a>';
    }else{
        if($get_t->num_rows == 0) {
            header("Location: " . $_WEBSITE["CMS"]["url"] . "/identity/avatars?error=no_account");
            exit;
        }else{
            $_SESSION["avatar_user_name"] = $getMyAvatarID;
            header("Location: " . $_WEBSITE["CMS"]["url"] . "/me");
            exit;
        }
    }
?>