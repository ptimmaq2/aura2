<?php
/*/========================\ \
| | TuttaCms
| | By: Tuttarealstep
| |	TProgram & TuttaCms
| | TuttaCms Build 0060
\ \========================*/

if(!isset($nomepagina) || empty($nomepagina)){
$nomepagina = $nomesito;

}
include('../sistema/controlloban.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $nomesito; ?>: <?php echo $nomepagina; ?> </title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<link rel="shortcut icon" href="../web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
 <link href='//fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic|Ubuntu+Condensed' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="../web-gallery/static/styles/v3_default.css" type="text/css" />
<script src="../web-gallery/static/js/v3_default_top.js" type="text/javascript"></script>
<link rel="stylesheet" href="../web-gallery/static/styles/lightweightmepage.css" type="text/css" />

<script src="../web-gallery/static/js/lightweightmepage.js" type="text/javascript"></script>


<script type="text/javascript">
document.habboLoggedIn = true;
var habboName = "<?php echo $nomeuser; ?>";
var habboSecureServerRoot = "https://localhost";
var habboReqPath = "";
var habboStaticFilePath = "web-gallery/";
var habboImagerUrl = "http://www.habbo.it/habbo-imaging/";
var habboPartner = "";
window.name = "habboMain";
if (typeof HabboClient != "undefined") {
    HabboClient.windowName = "cf83d43a69306b74f72f6084031d5565662c8c57";
    HabboClient.maximizeWindow = true;
}
</script>

<meta name="description" content="<?php echo $nomesito; ?> Amici, divertimento, Celebrità!" />
<meta name="keywords" content="<?php echo $nomesito; ?>, virtuale, mondo, social network, gratis, community, avatar, personaggio, chat, online, giovane, ragazzi, gioco di ruolo, giochi di ruolo, iscriviti, social, gruppi, forum, sicurezza, giocare, giochi, online, amici, giovani, rari, Furni rari, collezione, creare, collezionare, connettersi, furni, mobili, cuccioli, animali, creazione stanze, condivisione, espressione, Distintivi, badge, uscire, musica, HC, celebrità, visite HC, famosi, mmo, mmorpg, multiplayer" />


<?php if($idpagina == "me" || $idpagina == "impostazioni" || $idpagina == "profilo" || $idpagina == "gruppi" || $idpagina == "staff" || $idpagina == "articles"){?>
<link rel="stylesheet" href="../web-gallery/static/styles/v3_me.css" type="text/css" />
<?php } ?>
<?php if($idpagina == "crediti" || $idpagina == "transazioni"){?>
<link rel="stylesheet" href="../web-gallery/static/styles/v3_creditflow.css" type="text/css" />
<?php } ?>
<?php if($idpagina == "community"){?>
<link rel="stylesheet" href="../web-gallery/static/styles/v3_community.css" type="text/css" />
<?php } ?>

<!--[if lt IE 8]>
<link rel="stylesheet" href="../web-gallery/v2/styles/ie.css" type="text/css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" href="../web-gallery/v2/styles/ie6.css" type="text/css" />
<script src="../web-gallery/static/js/pngfix.js" type="text/javascript"></script>
<script type="text/javascript">
try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
</script>

<style type="text/css">
body { behavior: url(../web-gallery/csshover.htc); }
</style>
<![endif]-->
<meta name="build" content="63-BUILD-TUTTACMS-0060 - it" />
<script src="../web-gallery/static/js/v3_default_top.js" type="text/javascript"></script>
</head>