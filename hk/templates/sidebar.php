        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
           <br />
		   [ <a href='index.php?url=dashboard'>Return to Dashboard</a> ] [ <a href='index.php?url=logout'>Log out</a> ]<br /> <br />
            <p>
			<?php if(mysql_result(mysql_query("SELECT rank FROM users WHERE id = '" . $_SESSION['user']['id'] . "'"), 0) >= 10)
			{ ?>
			Player Management <br /> <img src='../app/tpl/skins/{skin}/hk/images/line.png'> <br />
			
			&raquo; <a href='index.php?url=vip'>Give a user Regular VIP</a> <br />
			&raquo; <a href='index.php?url=edit'>Edit a users account</a> <br />
			<br />
			Administration <br /> <img src='../app/tpl/skins/{skin}/hk/images/line.png'> <br />
			&raquo; <a href='index.php?url=news'>Post news article</a><br />
			&raquo; <a href='index.php?url=delnews'>Delete a news article (By ID)</a><br />
			&raquo; <a href='index.php?url=cmdlogs'>Command logs</a><br />&raquo; <a href='motd'>Change welcome message</a><br />&raquo; <a href='empty'>Empty a table</a><br />&raquo; <a href='timer'>Change the Credits & Pixels timer</a><br />
			<br />
						Badges <br /> <img src='../app/tpl/skins/{skin}/hk/images/line.png'> <br />
			&raquo; <a href='index.php?url=listbadge'>List badges</a><br />&raquo; <a href='index.php?url=addbadge'>Add a badge</a><br />&raquo; <a href='index.php?url=delbadge'>Delete a badge</a><br />
			
			<br />
			<?php } if(mysql_result(mysql_query("SELECT rank FROM users WHERE id = '" . $_SESSION['user']['id'] . "'"), 0) >= 7) { ?>
			Moderation <br /> <img src='../app/tpl/skins/{skin}/hk/images/line.png'> <br />
			&raquo; <a href='index.php?url=banlist'>Ban List</a> <br />
			&raquo; <a href='index.php?url=ip'>IP lookup</a> <br />
			&raquo; <a href='index.php?url=unban'>Unban a User</a> <br />&raquo; <a href='addban'>Ban a user</a>
<?php } ?>
			<br />
			Statistics<br />
			<img src='../app/tpl/skins/{skin}/hk/images/line.png'> <br />
					Server Status: 
			{status} <br />
			{online} user(s) online <br />
	
			</p>
          </div>