<?php
/*/========================\ \
| | TuttaCms
| | By: Tuttarealstep
| |	TProgram & TuttaCms
| | TuttaCms Build 0060
\ \========================*/
if(empty($body_id)){
$body_id = "home";
};
?>
<body>
<div id="overlay"></div>
<header>
    <div id="border-left"></div>
    <div id="border-right"></div>
    <div id="header-content">
        <a href="/" id="habbo-logo"></a>
            <div class="navigation">
                <ul>	
					<?php if($idpagina == "me" || $idpagina == "profilo" || $idpagina == "impostazioni" && $loggato == true){ ?>						<li class="selected"><span style="width: 30px; display: inline-block;"></span> <span>Me</span></li>
                    <?php } elseif($loggato == true){ ?>
                        <li><a href="me.php"> <span style="width: 30px; display: inline-block;"></span> <span>Me</span></a></li>
					<?php } elseif($loggato !== true){ ?>
      
       				<?php } ?>
                    <?php if($idpagina == "community" || $idpagina == "staff"){ ?>
       					<li class="selected">
                            <span class="community"></span><strong>Community</strong><span></span>
                        </li>
        			<?php } else { ?>
      					 <li class="">
                            <a href="community.php"><span class="community"></span> <strong>Community</strong><span></span></a>
                        </li>
       				<?php } ?>
                     <?php if($idpagina == "crediti"){ ?>
                        <li class="selected">
                            <span class="credits"></span><strong>Crediti</strong><span></span>
                        </li>
       				 <?php } else { ?>
       					 <li class="">
                            <a href="credits.php"><span class="credits"></span> <strong>Crediti</strong><span></span></a>
                        </li>
       				 <?php } ?>
       
        			 <?php if($idpagina == "news"){ ?>
       					 <li class="selected">
                            <span class="articles"></span><strong>News</strong><span></span>
                        </li>
       				 <?php } else { ?>
        				  <li class="">
                            <a href="articles.php"><span class="articles"></span> <strong>News</strong><span></span></a>
                        </li>
        			<?php } ?>
					<?php if($rank > 5){ ?>
                     <li class="">
                         <a href="./housekeeping/"><span class="workbench"></span> <strong>Housekeeping</strong><span></span></a>
                      </li>
       				<?php } ?>
                    <li class="">
                         <a href="client.php" target="38bad4312a9f27ce591f69f49725def36283fe99" onClick="HabboClient.openOrFocus(this); return false;"><span class="safety"></span> <strong>Client</strong><span></span></a>
                      </li>
                </ul>
            </div>
    </div>
    <div id="top-bar-triangle"></div>
    <div id="top-bar-triangle-border"></div>
</header>

<div id="content">
            <div class="sub-navigation">
                <ul>
                 <?php if($idpagina == "me" || $idpagina == "profilo" || $idpagina == "impostazioni"){ ?>
                <?php if($idpagina == "me"){ ?>
                <li class="selected">
    				Home
                <?php } else { ?>
                <li class="">
    				<a href="me.php">Home</a>
                <?php } ?>
        		</li>

                <?php if($idpagina == "profilo"){ ?>
                <li class="selected">
    				La mia Pagina
                <?php } else { ?>
                <li class="">
    				<a href="user_profile.php?name=<?php echo $nomeuser; ?>">La mia Pagina</a>
                <?php } ?>
        		</li>

                <?php if($idpagina == "impostazioni"){ ?>
                <li class="selected">
    				Impostazioni Account
                <?php } elseif($loggato){ ?>
                <li class="">
	    			<a href="impostazioni.php">Impostazioni Account</a>
                <?php } ?>
    	    	</li>
				 <?php if($idpagina == "personaggi"){ ?>
                <li class="selected">
    				I miei personaggi
                <?php } else { ?>
                <li class="">
				<a href="account.php">I miei personaggi</a>
		
                <?php } ?>
				</li>
                 <li class="last">
	    			<a href="logout.php">Logout</a>
    	    	</li>
        <?php } else if ($idpagina == "community" || $idpagina == "staff"){ ?>
                <?php if($idpagina == "community"){ ?>
                <li class="selected">
    				Community
                <?php } else { ?>
                <li class=" ">
	    			<a href="community.php">Community</a>
                <?php } ?>
                <?php if($idpagina == "staff"){ ?>
                <li class="selected">
    				Staff
                <?php } else { ?>
                <li class=" last">
	    			<a href="staff.php">Staff</a>
                <?php } ?>
        <?php } else if($idpagina == "crediti" || $idpagina == "transazioni"){ ?>
                <?php if($idpagina == "crediti"){ ?>
                <li class="selected ">
    				Crediti
                <?php } else { ?>
                <li class=" ">
	    			<a href="credits.php">Crediti</a>
                <?php } ?>
        <?php } ?>
    	    	</li>
</ul>

	
	</div>
</div>

<script src="../web-gallery/static/js/v3_default_top.js" type="text/javascript"></script>
<script src="../web-gallery/static/js/risposte.js" type="text/javascript"></script>
<?php 
 $risposte = mysql_query("SELECT * FROM risposte WHERE utente = '".$nomeuser."' AND visibile = '1' LIMIT 1");
 $rowrisposte = mysql_fetch_assoc($risposte);
    // Se ha trovato un record
    if(mysql_num_rows($risposte) == 1)
    {
 ?>
    <form class="growls-form" method="post" action="#">
 <div id="growls" class="default"><div class="growl growl-information growl-medium">
  <div class="growl-close">×</div>
  <div class="growl-idrisposta" style="display:none;"><input class="growl-idrisposta-input" type="text" value="<?php echo $rowrisposte['id']; ?>"></div>
  <div class="growl-title">Messaggio da <?php echo $rowrisposte['staffer']; ?> </div>
  <div class="growl-message"><?php echo $rowrisposte['risposta']; ?> </div>
</div></div>
	</form>
<?php } ?>
<?php if($notificadimanutenzione){ ?>
 <div id="growls" class="default"><div class="growl growl-error growl-medium">
  <div class="growl-close">×</div>
  <div class="growl-title">Manutenzione</div>
  <div class="growl-message">L'hotel è in manutenzione!</div>
</div></div>
<?php } ?>

<?php include('templates/footerscript.php'); ?>