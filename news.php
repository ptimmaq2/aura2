<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Babux - News</title>
	
<!-- REMINDER TO MYSELF: Using Habbo's style folder, so if habbo goes down, need to use other style folder or rip theirs -->

    <script>
        var andSoItBegins = (new Date()).getTime();
        var habboPageInitQueue = [];
        var habboSecureServerRoot = "https://www.habbo.com";
        var habboStaticFilePath = "https://habboo-a.akamaihd.net/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/2543/web-gallery";
    </script>
<?php include'includes/style.php';?>

<?php include 'includes/navigation.php';?>
            <div class="navigation">
                <ul>

						 <li>
                            <a href="{url}/me"><span class="head"></span> Me</a>
                            <span></span>
                        </li>
                         
                            <a href="{url}/community"><span class="community"></span> Community</a>
                            <span></span>
                        </li>
						<li class="selected">
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
   <!-- <div id="top-bar-triangle"></div>
    <div id="top-bar-triangle-border"></div>-->
</header>

<div id="content">
                <div class="sub-navigation">
                    <ul>
					
					<li class="selected">
                                News
                           <li class="last">
                                <a href="{url}/vip">VIP</a>                            
                            </li>
                            
                    </ul>
                </div>
    <div id="page-content">
        <section id="upper-content">
  <div class="content">




 <section id="upper-content-left">
		  <div class="news-list-thing" >
<center><h2 class="underlined">News</h2></center>
<ul>

 {newsList}<br/>

</ul>
<div style="margin-top: 20px;">

<a href="{url}/news"><input style="margin-right: 5px;float:right;" class="confirm-button" type="submit" value="Refresh" /></a></br>
</br>

</div>

</section>

<section id="upper-content-right"></br>
   
		  <h1 class="underlined">&raquo; {NewsTitle} </h1>
		<div class="article-meta">Posted {newsDate}</div>
		<p class="summary">{newsTitle}</p>
                                    </br>
                              {newsContent}
                  
            
                                        <script type="text/javascript" language="Javascript">
                                            document.observe("dom:loaded", function() {
                                                $$('.article-images a').each(function(a) {
                                                    Event.observe(a, 'click', function(e) {
                                                        Event.stop(e);
                                                        Overlay.lightbox(a.href, "Image is loading");
                                                    });
                                                });
                                  
                                                $$('a.article-2729').each(function(a) {
                                                    a.replace(a.innerHTML);
                                                });
                                            });
                                        </script>


</div>

</div>



</div>


</div>


<br>
<br>
<br>
  
<?php include 'includes/footer.php';?>