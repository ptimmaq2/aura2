<?php
/*/========================\ \
| | TuttaCms Config
| | By: Tuttarealstep
| |	TProgram & TuttaCms
| | TuttaCms Build 0060
\ \========================*/
define('ID_RICHIESTO', FALSE);
include('../../core.php');
?>
<script src="../../web-gallery/static/js/libs2.js" type="text/javascript"></script>
<script src="../../web-gallery/static/js/visual.js" type="text/javascript"></script>
<script src="../../web-gallery/static/js/libs.js" type="text/javascript"></script>
<script src="../../web-gallery/static/js/common.js" type="text/javascript"></script>
<div id="promo-box">
<div id="promo-bullets">
</div>
<?php
$news1_5 = mysql_query("SELECT * FROM cms_news_slider ORDER BY id DESC LIMIT 5") or die(mysql_error());
 $i = 0; while($news = mysql_fetch_assoc($news1_5)){ $i++; ?>

  <div class="promo-container" style="background-image: url(../web-gallery/images/v3/newsg/<?php echo $news['image']; ?>)<?php if($i != '1'){ ?>; display: none<?php } ?>">
       
            <div class="promo-content-container">
                <div class="promo-content">
                    <div class="title"><?php echo $news['title']; ?></div>
                    <div class="body"><?php echo bbcode_converti(trim(nl2br(stripslashes($news['shortstory']))))?>
                    <a href="articles.php?id=<?php echo $news['id']; ?>">Leggi la news completa...</a><b></b></div>
              </div>
            </div>
                
<div class="promo-link-container">
<div class="enter-hotel-btn">
                        <div class="open enter-btn">
<a style="padding: 0 8px 0 18px;" href="<?php echo $news['link']; ?>"><?php echo $news['button_title']; ?></a><b></b>
                            
                        </div>
	
            </div>
        </div>
</div><?php } ?>
</div>
<script type="text/javascript">
    document.observe("dom:loaded", function() { PromoSlideShow.init(); });
</script>