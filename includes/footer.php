<br />
<br />
<br />
<br />
<br />
<br />
</b>
</b>
          <br><br><br><br><br><br>
<br>
<br>   <!--without these the pages cant be scrolled down enough too see full content sometimes...hehe..-->
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>


<script type="text/javascript">
   window.addEventListener('contextmenu', function(e) {
                $('.rightclickmenu').css({
                        "margin-left": e.clientX,
                        "margin-top": e.clientY
                }).show()
              //small script i made to disable right clicking, you mad bro?
                e.preventDefault();
                window.addEventListener('click', function(){
                        $('.rightclickmenu').hide();
                })
   })
 
</script>







<footer>
    <div id="age-recommendation"></div>

    <div id="footer-content">
        <div id="footer">
		
		<a href="{url}/rules">Rules</a> /<a href="{url}/refund">Refund Policy</a> / <a href="{url}/tos" target="_new">Terms of Service</a> / <a href="{url}/dis" target="_new">Disclaimer</a> / <a href="{url}/safety" target="_new">Safety</a> / <a href="{url}/infringements">Infringements</a></div>
        <div id="copyright">&copy; 2013 
{hotelname} Hotel is not part of Sulake and is not Habbo, {hotelname} is no way affiliated with Sulake Corporation Oy,<br/> please do not enter your Habbo details here. All rights reserved to {hotelname}'s respective owner(s). Customm revcms theme by Babux hotel owner.</br><b> </b></br></div>
    </div><p align="right"> <img src="{url}/app/tpl/skins/{skin}/img/B.png"> <img style="margin-right: 20px;">
    </div>
</footer>


<script src="{url}/images/web-gallery/static/js/v3_landing_bottom.js" type="text/javascript"></script>
<!--[if IE]><script src="{url}/images/web-gallery/static/js/v3_ie_fixes.js" type="text/javascript"></script>
<![endif]-->
<?php include 'includes/checktheban.php';?> 
<!-- Index and all other pages have been edited by Timo (ptimmaq2) from {hotelname} Hotel!<!-->
<!-- Made this Revcms Skin from Habbo's credits page.<!-->
</body>
</html>