
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->


<!-- Index and all other pages have been edited or added by Timo (ptimmaq2) from {hotelname} Hotel!<!-->
<!-- edit from RainbowJerk's revcms edit. I (Timo) took stuff and merged together from many CMS.<!-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{hotelname} Hotel - Innovating Hotel. </title>
    <meta name="viewport" content="width=device-width">

    <script>
        var andSoItBegins = (new Date()).getTime();
        var habboPageInitQueue = [];
        var habboStaticFilePath = "http://25.88.140.109/images/web-gallery";
    </script>
    <link rel="shortcut icon" href="https://25.88.140.109/favicon.ico" type="image/vnd.microsoft.icon" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic">

<link rel="stylesheet" href="{url}/app/tpl/skins/HabboExtreme/styles/frontpage.css" type="text/css" />
<script src="http://25.88.140.109/images/web-gallery/static/js/v3_landing_top.js" type="text/javascript"></script>        <meta name="description" content="Check into the world's largest virtual hotel for FREE! Meet and make friends, play games, chat with others, create your avatar, design rooms and more..." />
        <meta name="keywords" content="{hotelname} hotel, virtual, world, social network, free, community, avatar, chat, online, teen, roleplaying, join, social, groups, forums, safe, play, games, online, friends, teens, rares, rare furni, collecting, create, collect, connect, furni, furniture, pets, room design, sharing, expression, badges, hangout, music, celebrity, celebrity visits, celebrities, mmo, mmorpg, massively multiplayer" />

<script src="//cdn.optimizely.com/js/13389159.js"></script>
    <meta name="build" content="63-BUILD-FOR-PATCH-1591a - 04.03.2013 12:03 - com" />
    
</head>
<body>
<div id="overlay"></div>


<div id="change-password-form" class="overlay-dialog" style="display: none;">
    <div id="change-password-form-container" class="clearfix form-container">
        <h2 id="change-password-form-title" class="bottom-border">Forgot Password?</h2>
        <div id="change-password-form-content" style="display: none;">
            <form method="post" action="#" id="forgotten-pw-form">
                <input type="hidden" name="page" value="/?changePwd=true" />
                <span>Type in your {hotelname} account email address:</span>
                <div id="email" class="center bottom-border">
                    <input type="text" id="change-password-email-address" name="emailAddress" value="" class="email-address" maxlength="48"/>
                    <div id="change-password-error-container" class="error" style="display: none;">Please enter a correct email address</div>
                </div>
            </form>
            <div class="change-password-buttons">
                <a href="#" id="change-password-cancel-link">Cancel</a>
                <a href="#" id="change-password-submit-button" class="new-button"><b>Send Email</b><i></i></a>
            </div>
        </div>
        <div id="change-password-email-sent-notice" style="display: none;">
            <div class="bottom-border">
                <span>Hey, we just sent you an email with a link that lets you reset your password.<br>
<br>

NOTE! Remember to check your "junk" folder too!</span>
                <div id="email-sent-container"></div>
            </div>
            <div class="change-password-buttons">
                <a href="#" id="change-password-change-link">Back</a>
                <a href="#" id="change-password-success-button" class="new-button"><b>OK</b><i></i></a>
            </div>
        </div>
    </div>
    <div id="change-password-form-container-bottom" class="form-container-bottom">
</div>
</div>


<header>
    <div id="border-left"></div>
    <div id="border-right">
</div>

<?php if(isset($template->form->error)) { ?>
                    <div id="loginerrorfieldwrapper">
                        <div id="loginerrorfield">
                            <div><?php echo $template->form->error; ?></div>
                        </div>
                    </div>
                <?php } ?>


<div id="login-form-container">
    <a href="#home" id="habbo-logo"></a>

    <form id="loginformitem" name="loginformitem" method="post">
    
    <div id="login-columns">
        <div id="login-column-1">
            <label for="login-username">Email</label>
            <input tabindex="2" type="text" class="login-field" name="log_username" id="credentials-email" style="border-radius:6px;">
            <input tabindex="5" type="checkbox" name="_login_remember_me" id="credentials-remember-me">
            <label for="credentials-remember-me" class="sub-label">Keep me logged in</label>
        </div>

        <div id="login-column-2">
            <label for="login-password">Password</label>
            <input tabindex="3" class="login-field" type="password" name="log_password" type="password" style="border-radius:6px;"id="credentials-password">
            <a href="/index#registration" id="forgot-password" class="sub-label">New here? Register!</a>
        </div>

        <div id="login-column-3">
<input type="submit" value="Login" class = "button" name="login" style="width: 100px;height: 28px;border-radius:6px;">

</div>


        <div id="login-column-4">
<div id="fb-root"></div>
<script type="text/javascript">
    window.fbAsyncInit = function() {
        Cookie.erase("fbsr_183096284873");
        FB.init({appId: '183096284873', status: true, cookie: true, xfbml: true});
        if (window.habboPageInitQueue) {
            // jquery might not be loaded yet
            habboPageInitQueue.push(function() {
                $(document).trigger("fbevents:scriptLoaded");
            });
        } else {
            $(document).fire("fbevents:scriptLoaded");
        }

    };
    window.assistedLogin = function(FBobject, optresponse) {
        
        Cookie.erase("fbsr_183096284873");
        FBobject.init({appId: '183096284873', status: true, cookie: true, xfbml: true});

        permissions = 'user_birthday,email';
        defaultAction = function(response) {

            if (response.authResponse) {
                fbConnectUrl = "/facebook?connect=true";
                Cookie.erase("fbhb_val_183096284873");
                Cookie.set("fbhb_val_183096284873", response.authResponse.accessToken);
                Cookie.erase("fbhb_expr_183096284873");
                Cookie.set("fbhb_expr_183096284873", response.authResponse.expiresIn);
                window.location.replace(fbConnectUrl);
            }
        };

        if (typeof optresponse == 'undefined')
            FBobject.login(defaultAction, {scope:permissions});
        else
            FBobject.login(optresponse, {scope:permissions});

    };

    (function() {
        var e = document.createElement('script');
        e.async = true;
        e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
        document.getElementById('fb-root').appendChild(e);
    }());
</script>

<div class="people_inside" style="top:355px;">
				    <b><span><span class="online_count user_count_refresh">
					<?php 
$query = mysql_query("SELECT COUNT(*) AS aantalleden FROM users") or die(mysql_error()); 
$data = mysql_fetch_assoc($query); 

echo $data['aantalleden']; 
?>
</span></b> Registered Members!</span></b>
				    <i></i>
				</div>

<div id="rpx-signin">
    <a class="rpxnow" onclick="return false;" href=""></a>
</div>        </div>
    </div>
</form>
</div>

    <div id="alerts">
<noscript>
<div id="alert-javascript-container">
    <div id="alert-javascript-title">
        Missing JavaScript support
    </div>
    <div id="alert-javascript-text">
        Javascript is disabled on your browser. Please enable JavaScript or upgrade to a Javascript-capable browser to use {hotelname} :)
    </div>
</div>
</noscript>

<div id="alert-cookies-container" style="display:none">
    <div id="alert-cookies-title">
        Missing cookie support
    </div>
    <div id="alert-cookies-text">
        Cookies are disabled on your browser. Please enable cookies to use {hotelname}.
    </div>
</div>
<script type="text/javascript">
    document.cookie = "habbotestcookie=supported";
    var cookiesEnabled = document.cookie.indexOf("habbotestcookie") != -1;
    if (cookiesEnabled) {
        var date = new Date();
        date.setTime(date.getTime()-24*60*60*1000);
        document.cookie="habbotestcookie=supported; expires="+date.toGMTString();
    } else {
        if (window.habboPageInitQueue) {
            // jquery might not be loaded yet
            habboPageInitQueue.push(function() {
                $('#alert-cookies-container').show();
            });
        } else {
            $('alert-cookies-container').show();
        }
    }
</script>
    </div>
    <div id="top-bar-triangle"></div>
    <div id="top-bar-triangle-border"></div>
</header>


<div id="content">
    <ul>
        <li id="home-anchor">
            <div id="welcome">
                <a href="index#registration" class="button large" id="join-now-button"><b></b><span>Join Today!</span><span class="sub">(It's 100% free)</span></a>
                <div id="slogan">
                    <h1>Welcome to {hotelname},</h1>
                    <p>a lovely place with awesome people. </p>
                    <p><a id="tell-me-more-link" href="/about">More information...</a></p>
                </div>
            </div>
<div id="carousel">
<div id="image1">
<style>
#people-inside{
	display:block;
	float:left;
	height:65px;
	position:relative;
	overflow:hidden;
	white-space:nowrap;
	z-index:100;
	top:30px;
	left:110px;
}
#people-inside b{
	float:left;
	padding:5px 10px 4px 16px;
	font-size:12px;
	height:56px;
	min-width:45px;
	max-width:145px;
	margin-right:8px;
	background:transparent url(http://25.88.140.109/images/web-gallery/v2/images/users_online_bubble.png) no-repeat -8px 0;
	color:#000;
	font-weight:normal;
	text-align:center;
	display:inline;
}
#people-inside i{
	position:absolute;
	right:0;
	top:0;
	width:8px;
	height:65px;
	background:transparent url(http://25.88.140.109/images/web-gallery/v2/images/users_online_bubble.png) no-repeat 0 0;
}
#people-inside span{
	display:block;
}
#people-inside .stats-fig{
	font-size:18px;
	font-weight:bold;
}
</style>
<div id="people-inside">
    <b><span><span class="stats-fig">{online}</span>User(s) Online!</span></b>
    <i></i>
	
</div>
</div>
<div id="image2"></div>
<div id="image3"></div>
<div id="tell-me-more">{hotelname} is a virtual world where you can create your character and have fun decorating your rooms, meeting new friends, organizing parties, chatting, taking care of your animals and much more, we are just like Habbo, but coins are FREE! <br> What are you waiting? Click on 'Join today' (or <a href="/index#registration">click this)</a> to get started and become part of an awesome community!</Div>
</div>
 <div id="geotargeting">Welcome to all new version of {hotelname}!</a></div>
<div id="floaters"></div>
        </li>
<li id="registration-anchor">

<div id="registration-form">
    <div id="registration-form-header">
        <h2>User ID</h2>
        <p>Fill in these details to begin:</p>
    </div>
    <div id="page-content-padding">

<?php if(isset($template->form->error)) {  echo '<div style="text-align:center; color:red; font-weight: bold;">'.$template->form->error.'</div>'; }?>
<br />
<form action="register" method="post" id="registerForm">
<div id="registration-form-main">
<div id="registration-form-main-left">
<label for="registration-birthday"> Date of Birth </label>
<label for="registration-birthday" class="details"> Required for security reasons. </label>
<div id="registrationBean.birth.error" style="display:none;">
<div class="field-error"> Invalid date or the lowest total in 13 years </div>
</div>
<div id="registration-birthday">
<select name="registrationBean.month" id="registrationBean_month" class="dateselector"><option value="">Month</option><option value="1">January</option><option value="2">Feburary</option><option value="3">March</option><option value="4">April</option><option value="5">May</option><option value="6">June</option><option value="7">July</option><option value="8">August</option><option value="9">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select>
<select name="registrationBean.day" id="registrationBean_day" class="dateselector"><option value=""> Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
<select name="registrationBean.year" id="registrationBean_year" class="dateselector"><option value="">Year</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option><option value="1900">1900</option></select>
</div>

<label for="email-address">Username</label>
<label for="email-address" class="details">You'll need to use this <b>to log in</b> to {hotelname}.</label>
<input type="text" autocomplete="on" name="reg_username" style="width: 300px;height: 28px;border-radius:6px;" value="<?php echo $_POST['reg_username'] ?>" id="username" placeholder="Username" class="box1"><br /><br />
<label for="email-address">Email</label>
<label for="email-address" class="details">We will use this to restore your account if you ever lose access. Your Email will never be shared publicly.</label>
<input type="text" autocomplete="on" name="reg_email" style="width: 300px;height: 28px;border-radius:6px;" id="email" value="<?php echo $_POST['reg_email']; ?>" placeholder="Email Address" class="box1"><br /><br />
</div>


<div id="registration-form-main-right">
<label for="register-password">Password</label>
<label for="register-password" class="details">Password must be at least <b>6 characters </b>long and include <b>letters and numbers</b></label>
<input type="password" autocomplete="off" name="reg_password" style="width: 300px;height: 28px;border-radius:6px;" id="password" placeholder="Password" class="box1"><br /><br />

<label for="password2"><b>Repeat Password</b></label> 
<label for="register-password" class="details">Please vertify <b>Your password</b> to make sure you didn't make a mistake.</b></label>
<input type="password" autocomplete="off" name="reg_rep_password" style="width: 300px;height: 28px;border-radius:6px;" id="password1" placeholder="Confirm Password" class="box1"><br /><br />
<input type="hidden" name="reg_seckey"  style="width: 300px;height: 28px;border-radius:6px;" value="1234" />
<input type="hidden" name="register" value="register" />
<input class="regbtn" type="submit" name="register" style="width: 300px;height: 28px;border-radius:6px;" onClick="checkForm(); return false;" value="Register" />

</div>
</div>
</form>
<br /><br /><br />

								</div>
							</div>
								
								
    
</div>
<div id="magnifying-glass"></div>
            <div id="sail"></div>
        </li>
    </ul>
</div>

<footer>
    <div id="age-recommendation"></div>

    <div id="footer-content">
        <div id="footer"><a href="/index#registration">Register a Account</a> / <a href="/forum">Forum</a> /<a href="/refund">Refund Policy</a> / <a href="/tos" target="_new">Terms of Service</a> / <a href="/dis" target="_new">Disclaimer</a> / <a href="/safety" target="_new">Safety</a> / <a href="/infringements">Infringements</a></div>
        <div id="copyright">&copy; 2013 
{hotelname} Hotel is not part of Sulake and is not Habbo, {hotelname} is no way affiliated with Sulake Corporation Oy,<br/> please do not enter your Habbo details here. All rights reserved to {hotelname}'s respective owner(s). {hotelname} Hotel's CMS was heavily edited by Timo.</div>
    </div>
    <div id="sulake-logo"><a href="/index#registration"></a></div>
</footer>


<script src="http://25.88.140.109/images/web-gallery/static/js/v3_landing_bottom.js" type="text/javascript"></script>
<!--[if IE]><script src="http://25.88.140.109/images/web-gallery/static/js/v3_ie_fixes.js" type="text/javascript"></script>
<![endif]-->


<!-- Index and all other pages have been edited by Timo (ptimmaq2) from {hotelname} Hotel!<!-->
<!-- edit from RainbowJerk's revcms edit. I (Timo) took stuff and merged together from many CMS.<!-->
</body>
</html>