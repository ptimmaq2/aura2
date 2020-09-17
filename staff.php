<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Babux - Staff</title>
	
<!-- REMINDER TO MYSELF: Using Habbo's style folder, so if habbo goes down, need to use other style folder or rip theirs -->

    <script>
        var andSoItBegins = (new Date()).getTime();
        var habboPageInitQueue = [];
        var habboSecureServerRoot = "https://www.habbo.com";
        var habboStaticFilePath = "https://habboo-a.akamaihd.net/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/2543/web-gallery";
    </script>
<?php include 'includes/style.php';?>

<?php include 'includes/navigation.php';?>
            <div class="navigation">
                <ul>
                        <li>
                            <a href="{url}/me"><span class="head"></span> Me</a>
                            <span></span>
                        </li>
                        <li class="selected">
                            <a href="{url}/community"><span class="community"></span> Community</a>
                            <span></span>
                        </li>
						 <li>
                            <a href="{url}/news"><span class="articles"></span> News</a>
                            <span></span>
                        </li>
						<li>
                            <a href="{url}/settings"><span class="safety"></span> Settings</a>
                            <span></span>
                        </li>
						<li>
                            <a href="{url}/store"><span class="credits"></span> Store</a>
                            <span></span>
                        </li>
                    
                </ul>
            </div>
    </div>
</header>

<div id="content">
                <div class="sub-navigation">
                    <ul>
					
					
                              <li class="">
                                <a href="{url}/community">Community</a>                            
                            </li>
                           <li class="">
                                <a href="{url}/babuxway">Babux Way</a>                            
                            </li>
							  <li class="">
                                <a href="{url}/safety">Safety</a>                            
                            </li>
                           <li class="selected">
						   Staff
						   </li>
                    </ul>
                </div>
				
				</div>
</div>

<script src="../web-gallery/static/js/v3_default_top.js" type="text/javascript"></script>
<script src="../web-gallery/static/js/risposte.js" type="text/javascript"></script>

<script src="../web-gallery/static/js/growl.js" type="text/javascript"></script>
<script src="../web-gallery/static/js/v3_default_top.js" type="text/javascript"></script>


        <div id="page-content">
            <section id="upper-content">
        <section>
                
    
            <div id="purchase-tabs">
            <ul class="tabs">
                <li><a class="purchase-option  selected"><span class="other">&nbsp;</span> The Crew </a> |</li>
            </ul>
        </div>
    </section>

</section>
		<div id="lower-content">
			<section id="lower-content-left">
				<section id="payment-methods">
					<div id="owners" class="payment-tab">
						<a class="anchor" id="cell_phone"></a>
						<section id="deal-promo">
							<div class="builders subscription-management">
								<div id='box'>
									<div id="habboplate">
										<div class="habblet-container ">		
											<div class="cbb clearfix green">
												<!--I don't understand your codes xD-->
												<?PHP
													// REMINDER TO MYSELF: h5 is normal text and h2 titles.
													$FindRanks	= MySQL_Query("SELECT * FROM ranks WHERE id >= 5 ORDER BY id DESC");
													while($GetRank = MySQL_Fetch_Assoc($FindRanks))
													{
														echo "<h2 style='border-bottom:2px solid #357E99;border-top:2px solid #357E99;'>".$GetRank['name']."s</h2>\n";
														$FindStaff	= MySQL_Query("SELECT * FROM users WHERE rank = ".$GetRank['id']." AND username != 'Blah'");
														while($GetStaff = MySQL_Fetch_Assoc($FindStaff))
														{
															if($GetStaff['online'] == 1)
																echo "<img src='{url}/app/tpl/skins/aura/habboweb/online.gif' style='float:Right;'>";
															else
																echo "<img src='{url}/app/tpl/skins/aura/habboweb/offline.gif' style='float:Right;'>";
															echo "<img alt='{$GetStaff['username']}' style='float:Left;' src='http://habbo.nl/habbo-imaging/avatarimage?figure={$GetStaff['look']}&direction=2&head_direction=3&action=stand,crr=006'>\n";
															echo "<p style='height:110px;margin:50px 5px 5px 74px;'>\n";
															echo "Username: <b>".$GetStaff['username']."</b><br>\n";
															echo "Motto: <b>".$GetStaff['motto']."</b><br>\n";
															echo "Country: <b>".$GetStaff['country']."</b><br>\n";
                                                            echo "Age: <b>".$GetStaff['age']."</b><br>\n";//everyone wants to know more about us ;3
															echo "</p>\n";
														}
													}
													{
													echo '<p align="center"><i>There are no staff members in this position yet.</i></p>';
													}
												?>
												<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
											</div>
											<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script> </div></div><br></div></div>
										</div>	
									</div>
								</div>
							</div>
						</section>
					</div>
				</section>
			</section>
			<section id="bottom-content">
				<section id="lower-content-centered">   
					<div class="small-alert-box-2"style="margin-top:-430px;margin-left:10px;float:Left;">
					<h2 style='border-bottom:2px solid #357E99;font-size:32px;'><font color="#B1E796">&nbsp;&nbsp;Are we hiring?</h2></font>
				<center>	<img src="{url}/app/tpl/skins/aura/habboweb/yes.jpg"style="padding:10px;-moz-border-radius: 30px; -khtml-border-radius: 30px;-webkit-border-radius: 30px;"/></center>
					</div>
				</section>
			</section>
		</div>
    </div>
</div>


<script src="https://habboo-a.akamaihd.net/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/2375/web-gallery/static/js/v3_default_bottom.js" type="text/javascript"></script>
<!--[if IE]><script src="https://habboo-a.akamaihd.net/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/2375/web-gallery/static/js/v3_ie_fixes.js" type="text/javascript"></script>
<![endif]-->

    
  
    

<br>
<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</br>
</br>
</br>
</br>
</br>
<br>
</br>
</br>
</br>
<?php include 'includes/footer.php';?>
