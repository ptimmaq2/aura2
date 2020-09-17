
<body>

<div id="overlay"></div>
<header>
    <div id="border-left"></div>          <!--REVCMS THEME BY PTIMMAQ2 AKA ISMAKT & 1PTIMMAQ1, OWNER OF BABUX HOTEL.-->    
      <div id="border-right"></div>                         <!--DON'T BE A DICK AND REMOVE MY CREDITS....-->
        <div id="header-content">
           </br>    
<img src="{url}/app/tpl/skins/aura/images/logo.png" <img style="margin-left: 20px; <div align="left" style="color: #FA0000;margin-top: 35px;margin-left: 180px">&nbsp;&nbsp;&nbsp;&nbsp;  {online} User(s) Online  &nbsp;		& &nbsp;		<?php $query = mysql_query("SELECT COUNT(*) AS aantalleden FROM users") or die(mysql_error()); $data = mysql_fetch_assoc($query); echo $data['aantalleden']; ?>
   </b> Registered!</b>

   <a href="https://findretros.com/rankings/vote/BabuxHotel1"><input style="margin-right: 20px;float:right;" class="confirm-button" type="submit" value="Enter Client" /></a>

   <a href="{url}/logout"><input style="margin-right: 0px;float:right;" class="signout-red-button" type="submit" value="Sign Out" /></a>

       <?php if(mysql_result(mysql_query("SELECT rank FROM users WHERE id = '" . $_SESSION['user']['id'] . "'"), 0) >= 7) //* change the rank required for access to hk
            { ?>
                   <a href="{url}/stafflogin"><input style="float:right;" class="cancel-button" type="submit" value="Housekeeping" /></a>
                    <?php
                    } ?></li>
                    </ul>   
					
					