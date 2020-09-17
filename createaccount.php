<?php
/*/========================\ \
| | TuttaCms Config
| | By: Tuttarealstep
| |	TProgram & TuttaCms
| | TuttaCms Build 0060
\ \========================*/
define('ID_RICHIESTO', TRUE);
include('../core.php');
$idpagina = 'creaaccount';
$pluginpagename = 'createaccount.php;
$nomepagina = 'Account';


if(!isset($_GET['look']))
{
$lookimpostato = 'hr-115-42.hd-190-1.ch-215-62.lg-285-91.sh-290-62';
}
else
{
$lookimpostato = addslashes($_GET['look']);
}
if(isset($_POST['registra']))
{
    
    // Dati Inviati dal modulo
    $nome = (isset($_POST['nome'])) ? trim($_POST['nome']) : '';    // Metto nella variabile 'user' il dato inviato dal modulo, se non viene inviato dò di default ''
    
    // Filtro i dati inviati se i magic_quotes del server sono disabilitati per motivi di sicurezza
    if (!get_magic_quotes_gpc()) {
        $nome = addslashes($nome);
		
    }
    
    
    // Controllo l'sername
    if(strlen($nome) < 4 || strlen($nome) > 20)
         $error = 'Username troppo corto, o troppo lungo';
    // Controllo l'indirizzo email non sia già registrato
	elseif($numeroaccount == '5')
       $error = 'Sei arrivato a 5 avatar';
	elseif(mysql_num_rows(mysql_query("SELECT username FROM users WHERE username = '$nome' LIMIT 1")) == 1)
        $error = 'Questo username risulta gi&agrave; registrato ad un altro utente';
    // Registrazione dell'utente nel database
    else
    {
        
		$ip = mysql_real_escape_string(get_realip());
        // Query per l'inserimento dell'utente nel database
		mysql_query("UPDATE account SET numero = numero+'1' WHERE email = '$mail'");
        $strSQL = "INSERT INTO users (username,password,mail,look,account_created,credits,activity_points,ip_reg)";
        $strSQL .= "VALUES('$nome', '$passwordutente', '$mail', '$lookimpostato','$registrazioneutente', '5000', '5000', '$iputente')";
echo '<meta http-equiv="Refresh" content="0.1; account.php" />';
        mysql_query($strSQL) or die ("Errore R001, contattare l'amministratore ".mysql_error());

    }
}

?>
<link rel="stylesheet" href="http://25.88.140.109/app/tpl/skins/aura/css/common.css" type="text/css" />
<link rel="stylesheet" href="http://25.88.140.109/app/tpl/skins/aura/css/avatarselection.css" type="text/css" />
<div id="overlay"></div><div id="container">

  <div id="add-avatar">
    <div class="add-avatar-container clearfix">
        <div class="title">
          <span class="habblet-close"></span>
          <h1>Aggiungi personaggio</h1>
        </div>
        <div id="content">
            <a id="back-link" href="account.php">&laquo; Torna ai miei personaggi</a>
            <form id="" method="post" action="">

            <div id="error-messages-container" style="margin-top: 10px"><b><font color="#FF0000">
            <?php  echo $error?>
           </font> </b>
            </div>

            <div id="name-field-container">
                <div class="field field-habbo-name">
                  <label for="habbo-name">Nome Utente</label>
                  <input type="text" id="habbo-name" size="32" value="" name="nome" class="text-field" maxlength="32"/>
                    <div id="name-suggestions">
                    </div>
                  <p class="help">Il tuo nome può contenere caratteri maiuscoli, minuscoli, numeri e caratteri speciali come _-=?!@:.,</p>
                </div>
            </div>
            <div id="avatar-field-container" class="clearfix">
                <div id="selected-avatar" >
                    <h3>Il tuo avatar:</h3>
                        <img src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure=<?php echo $lookimpostato;?>&size=b&direction=4&head_direction=4&gesture=sml" width="64" height="110"/>
                 
                </div>
                 <div id="avatar-choices">
                    <h3>Ragazze</h3>
                        <a href="creaaccount.php?look=hr-890-44.hd-629-2.ch-685-83.lg-715-64,s-1.g-1.d-4.h-4.a-0" class="female-avatar" rel="hr-890-44.hd-629-2.ch-685-83.lg-715-64">
                            <img src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure=hr-890-44.hd-629-2.ch-685-83.lg-715-64,s-1.g-1.d-4.h-4.a-0&size=s&direction=4&head_direction=4&gesture=smlf" width="33" height="56"/>
                        </a>
                        <a href="creaaccount.php?look=hr-676-36.hd-628-4.ch-680-64.lg-3116-74-62.sh-905-71.fa-1211" class="female-avatar" rel="hr-676-36.hd-628-4.ch-680-64.lg-3116-74-62.sh-905-71.fa-1211">
                            <img src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure=hr-676-36.hd-628-4.ch-680-64.lg-3116-74-62.sh-905-71.fa-1211,s-1.g-1.d-4.h-4.a-0&size=s&direction=4&head_direction=4&gesture=sml" width="33" height="56"/>
                        </a>
                        <a href="creaaccount.php?look=hr-890-35.hd-629-1.ch-685-76.lg-715-72.sh-907-76.wa-2011" class="female-avatar" rel="hr-890-35.hd-629-1.ch-685-76.lg-715-72.sh-907-76.wa-2011">
                            <img src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure=hr-890-35.hd-629-1.ch-685-76.lg-715-72.sh-907-76.wa-2011&size=s&direction=4&head_direction=4&gesture=sml" width="33" height="56"/>
                        </a>
                        <a href="creaaccount.php?look=hr-890-33.hd-600-2.ch-670-73.lg-720-78.sh-906-62" class="female-avatar" rel="hr-890-33.hd-600-2.ch-670-73.lg-720-78.sh-906-62">
                            <img src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure=hr-890-33.hd-600-2.ch-670-73.lg-720-78.sh-906-62&size=s&direction=4&head_direction=4&gesture=sml" width="33" height="56"/>
                        </a>
                        <a href="creaaccount.php?look=hr-890-38.hd-629-3.ch-665-80.lg-715-80.sh-907-64.he-1602-80.ca-1803-77.wa-2011" class="female-avatar" rel="hr-890-38.hd-629-3.ch-665-80.lg-715-80.sh-907-64.he-1602-80.ca-1803-77.wa-2011">
                            <img src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure=hr-890-38.hd-629-3.ch-665-80.lg-715-80.sh-907-64.he-1602-80.ca-1803-77.wa-2011&size=s&direction=4&head_direction=4&gesture=sml" width="33" height="56"/>
                        </a>

                    <h3>Ragazzi</h3>
                        <a href="creaaccount.php?look=hr-115-44.hd-180-1.ch-215-73.lg-270-85.sh-906-73.ea-1404-62.ca-1802.wa-3211-85-73.cc-260-62" class="male-avatar" rel="hr-115-44.hd-180-1.ch-215-73.lg-270-85.sh-906-73.ea-1404-62.ca-1802.wa-3211-85-73.cc-260-62">
                            <img src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure=hr-115-44.hd-180-1.ch-215-73.lg-270-85.sh-906-73.ea-1404-62.ca-1802.wa-3211-85-73.cc-260-62&size=s&direction=4&head_direction=4&gesture=sml" width="33" height="56"/>
                        </a>
                        <a href="creaaccount.php?look=hr-110-42.hd-185-2.ch-3030-80.lg-275-80.sh-295-62" class="male-avatar" rel="hr-110-42.hd-185-2.ch-3030-80.lg-275-80.sh-295-62">
                            <img src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure=hr-110-42.hd-185-2.ch-3030-80.lg-275-80.sh-295-62&size=s&direction=4&head_direction=4&gesture=sml" width="33" height="56"/>
                        </a>
                        <a href="creaaccount.php?look=hr-893-45.hd-209-8.ch-877-62-81.lg-270-78.sh-3115-81-62.ha-1006" class="male-avatar" rel="hr-893-45.hd-209-8.ch-877-62-81.lg-270-78.sh-3115-81-62.ha-1006">
                            <img src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure=hr-893-45.hd-209-8.ch-877-62-81.lg-270-78.sh-3115-81-62.ha-1006&size=s&direction=4&head_direction=4&gesture=sml" width="33" height="56"/>
                        </a>
                        <a href="creaaccount.php?look=hr-165-35.hd-185-7.ch-215-66.lg-270-64.sh-290-64.cc-260-77.cp-3125-62" class="male-avatar" rel="hr-165-35.hd-185-7.ch-215-66.lg-270-64.sh-290-64.cc-260-77.cp-3125-62">
                            <img src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure=hr-165-35.hd-185-7.ch-215-66.lg-270-64.sh-290-64.cc-260-77.cp-3125-62&size=s&direction=4&head_direction=4&gesture=sml" width="33" height="56"/>
                        </a>
                        <a href="creaaccount.php?look=hr-893-37.hd-180-7.ch-255-85.lg-285-64.sh-305-62.wa-2007.cc-260-62" class="male-avatar" rel="hr-893-37.hd-180-7.ch-255-85.lg-285-64.sh-305-62.wa-2007.cc-260-62">
                            <img src="http://www.habbo.co.uk/habbo-imaging/avatarimage?figure=hr-893-37.hd-180-7.ch-255-85.lg-285-64.sh-305-62.wa-2007.cc-260-62&size=s&direction=4&head_direction=4&gesture=sml" width="33" height="56"/>
                        </a>
                    
                </div>

               
                        </a>
                </div>
            </div><div align="center">
            <br clear="all"/>
            <a href="#" class="new-button green-button" id="done-btn"><b>Crea un personaggio</b><i></i></a>
            <input type="submit" id="done" name="registra" value="Crea un personaggio"/>
            </div>
        </form>
        </div>
    </div>
    <div class="add-avatar-container-bottom"></div>
  </div>