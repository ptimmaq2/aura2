<link rel="stylesheet" href="http://25.88.140.109/app/tpl/skins/aura/css/lightweightmepage.css" type="text/css" />
<script src="http://25.88.140.109/app/tpl/skins/aura/js/lightweightmepage.js" type="text/javascript"></script>

<div id="promo-box">

    <div id="promo-bullets"></div>

<?php
$news1_5 = mysql_query("SELECT * FROM cms_news_slider ORDER BY ID ASC") or die(mysql_error());
?>

<?php $i = 0; while($news = mysql_fetch_assoc($news1_5)){ $i++; ?>

        <div class="promo-container" style="background-image: url(<?php echo $news['image']; ?>)<?php if($i != '1'){ ?>; display: none<?php } ?>">
            <div class="promo-content-container">
                <div class="promo-content">
                    <div class="title"><?php echo $news['title']; ?></div>
                    <div class="body"><?php echo $news['shortstory']; ?></div>
                </div>
            </div>
<div class="promo-link-container">
<div class="enter-hotel-btn">
                        <div class="open enter-btn">
<?php if($news['button_enable'] == "1") { ?><a style="padding: 0 8px 0 18px;" href="<?php echo $news['link_button']; ?>"><?php echo $news['button_title']; ?></a><b></b><?php }else{ ?><?php } ?>
                            
                        </div>
                    </div>
            </div>
        </div><?php } ?>

</div>

<script type="text/javascript">    document.observe("dom:loaded", function() { PromoSlideShow.init(); });</script>
