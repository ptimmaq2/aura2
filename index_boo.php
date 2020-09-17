<title>{Hotelname} - Index</title>
<style>
html { 
  background: url({url}/app/tpl/skins/aura//bg.jpg); 
  
}

.login
{
margin-top:100px;
margin-left:920px;
color:white;
}
.login input[type=text],
.login input[type=password] {
    /* Size and position */
    width: 340;
    padding: 8px 4px 8px 10px;
    margin-bottom: 15px;

    /* Styles */
    border: 1px solid #4e3043; /* Fallback */
    border: 1px solid rgba(78,48,67, 0.8);
    background: rgba(0,0,0,0.15);
    border-radius: 2px;
    box-shadow: 
        0 1px 0 rgba(255,255,255,0.2), 
        inset 0 1px 1px rgba(0,0,0,0.1);
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -ms-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;

    /* Font styles */
    font-family: 'Ubuntu', 'Italic', serif, sans-serif; 
    color: #fff;
    font-size: 13px;
}
.button-content
{
margin-right:100px;
}
a:link {color:#4089b1;}      /* unvisited link */
a:visited {color:#4089b1;}  /* visited link */
a:hover {color:#4089b1;}  /* mouse over link */
a:active {color:#4089b1;}  /* selected link */
.button-content{width:63px;background:#00813E;border:3px solid #8EDA55;padding:9px 15px;text-shadow:0px 0px 1px #000;text-align:center;border-radius:6px 6px 6px 6px;-moz-border-radius:6px 6px 6px 6px;font-size:13px;display:inline-block;float:right;color:#fff;margin-left:5px;margin-top:0;}.button-content:hover{box-shadow:0 0 10px #fff;}.button-content:active{background:#00625C;margin-top:1px;}a.cancel .button-content{background:#AC194E;border:3px solid #E55877;}
</style>


<div class="login">
<div style="position: relative; left: 0; top: 0;">
<img src="{url}/app/tpl/skins/aura/bg.png" style="position:fixed;margin-left:-1400px;margin-top:-230px;">
<img src="{url}/app/tpl/skins/aura/images/logo.png" style="position: absolute; top: -13; left: -190;"/>
</div>
<h1><b><p style="font-weight: 700;
font-size: 32px;
color: #E4E4E4;
line-height: 33px;
text-shadow: 2px 2px 2px rgba(0,0,0,0.4);
font-family: Ubuntu,Arial,serif;"> Sign into {hotelname} !<p><b><font></h1>
<p style="margin-top: -25px"><b><font style="
font-style: italic;
font-size: 18px;
color: #7ecaee;
text-shadow: 1px 1px 2px rgba(0,0,0,0.4);
font-family: Ubuntu,Arial,serif;">Welcome to {hotelname}<p><b><font>
<form method="post"> <label style="font-weight: 700;
font-size: 15px;
color: #1494CC;
line-height: 33px;
text-shadow: 2px 2px 2px rgba(0,0,0,0.4);
font-family: Ubuntu,Arial,serif;">Email:</label> <label style="color: #E4E4E4;font-size:10px;">Enter your email.</label><br>
<input type="text" name="log_username" required="">
<br> 
<label style="font-weight: 700;
font-size: 15px;
color: #1494CC;
line-height: 33px;
text-shadow: 2px 2px 2px rgba(0,0,0,0.4);
font-family: Ubuntu,Arial,serif;">Password: <label style="color: #E4E4E4;font-size:10px;">Enter your password.</label></label>
<br>
<input type="password" name="log_password" required="">
<br>
<br>
<br>
<br>

<table>
<tr>
<td>
<a id="submit_signup" class="submit-button button-link cancel" href="/register">
						<div style="margin-top: -45px;margin-left: -5px;" class="button-content"><b>Register</b></div>
					</a>
</td>


<td>
<input id="submit_signup" style="margin-top: -45px;margin-left: 42px" type="submit" value="Login" class="button-content" name="login">

					</form>
</td>
</tr>
</table>
</div>

