<?php
/*/========================\ \
| | TuttaCms Config
| | By: Tuttarealstep
| |	TProgram & TuttaCms
| | TuttaCms Build 0060
\ \========================*/
define('ID_RICHIESTO', TRUE);
include('../core.php');
$idpagina = 'account';
$pluginpagename = 'account.php';
$nomepagina = 'Account';


if(!isset($_GET['error']))
{
	
}
else
{
$error = addslashes($_GET['error']);
}
?>
<head>
<title><?php echo $nomepagina;?></title>
</head>
<link rel="stylesheet" href="http://25.88.140.109/app/tpl/skins/aura/css/common.css" type="text/css" />
<link rel="stylesheet" href="http://25.88.140.109/app/tpl/skins/aura/css/avatarselection.css" type="text/css" />
<div id="overlay"></div>


<div id="container">

    <div id="select-avatar">
	<div class="pick-avatar-container clearfix">
        <div class="title">
            <span class="habblet-close"></span>
            <h1>Scegli il tuo personaggio</h1>
        </div>
		<div id="content">
            <div id="user-info">
                  <img src="https://ssl.facebook.com/pics/q_silhouette.gif"/>
              <div>
                  <div id="name"><?php echo $nomeuser;?></div>
                  <a href="me.php" id="logout">Torna in Hotel</a>
                  <a href="impostazioni.php" id="manage-account">Gestisci Account</a>
              </div>

            </div>
             <div align="center" id="error-messages-container" style="margin-top: 10px"><b><font color="#FF0000">
            <?php  echo $error?>
           </font> </b>
            </div>
            <div id="first-avatar">
                    <img alt="<?php echo $nomeuser; ?>" src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure=<?php echo $look ?>&size=b&direction=3&head_direction=3&gesture=sml"/>
                    <div id="first-avatar-info">
                        <div class="first-avatar-name"><?php echo $nomeuser; ?></div>
                        <div class="first-avatar-lastonline">Ultimo accesso: <span title="<?php echo $ultimoaccesso; ?>"><?php echo $ultimoaccesso; ?></span></div>
                        <a id="first-avatar-play-link" href="../sistema/set.php">
                            <div class="play-button-container">
                                <div class="play-button"><div class="play-text">Gioca</div></div>
                                <div class="play-button-end"></div>
                            </div>
                        </a>
                    </div>
            </div>


            <div id="link-new-avatar"><a class="new-button " onclick="" href="http://25.88.140.109/createaccount.php"><b>Aggiungi</b><i></i></a></div>

                <p style="margin: 5px 10px">Puoi avere fino a 5 utenti.</p>
            <div class="other-avatars">
                  <ul>
                    <li class="even">
                     <?php
					 $utentimail = mysql_query("SELECT * FROM users WHERE mail = '".$mail."' ORDER BY id DESC LIMIT 5");
    ?>
    <?php
            while($utentimrecenti = mysql_fetch_array($utentimail))
			{
				$username = $_POST['avatar-name'];
				
			
				?>
                 <img src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure=<?php echo $utentimrecenti['look']; ?>&size=b&direction=3&head_direction=3&gesture=sml" width="33" height="56"/>
                      <div class="avatar-info">
                        <div class="avatar-info-container">
                          <div class="avatar-name"><?php echo $utentimrecenti['username']; ?></div>
	            	      <div class="avatar-lastonline">Ultimo accesso: <span title="<?php echo $utentimrecenti['last_online']; ?>"><?php echo $utentimrecenti['last_online']; ?></span></div>
                        </div>
                          <div class="avatar-select"><a href="../sistema/identita.php?id=<?php echo $utentimrecenti['id']; ?>">Gioca</a></div>
                      </div>
                    </li>
                    <li>
                <?php
			}
			?>       
            </div>
        </div>
    </div>
    <div class="pick-avatar-container-bottom"></div>
  </div>