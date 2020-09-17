<h3 class="title txt">Edit News</h3>
		<?php
		if($_SESSION['user']['rank'] >= 6){
		?>
	
		
		
			<?php 
			$q = mysql_query("SELECT * FROM cms_news WHERE id = '" . $_GET['id']."'");
			$lol = mysql_fetch_assoc($q);
			if ($_POST['submit']){
				$title = mysql_real_escape_string($_POST['title']);
				$shortstory = mysql_real_escape_string($_POST['shortstory']);
				$longstory = mysql_real_escape_string($_POST['longstory']);
				$topstory = mysql_real_escape_string($_POST['topstory']);
				
				if(empty($title)){
					echo '<div class = "alert">Why have you removed the title?</div><br>';
				}
				
				else if(empty($shortstory)){
					echo '<div class = "alert">Why have you removed the short desc?</div><br>';
				}
				
				else if(empty($longstory)){
					echo '<div class = "alert">Why have you removed the article?</div><br>';
				}
				
				else{
					$q_editn = "INSERT INTO hk_logs (type, time, who_done) VALUES('Edit News(" . $title .")','". time() ."','{$_SESSION['user']['username']}')";

					mysql_query( "UPDATE cms_news SET title = '{$title}', shortstory = '{$shortstory}', longstory = '{$longstory}', image = '{$topstory}' WHERE id = '". $_GET['id'] ."'" );
					mysql_query($q_editn);
					echo "<div class = 'alert'>Updated article successfully.</div><br>";
				}
			}
			
			else if($_POST['topstory_view']){ ?>
			<div class="input-div">
			<img title="This is the newsavatar"class="tooltip shadow" src = "{url}/app/tpl/skins/Project Habbo/images/news/<?php echo $_POST['topstory']; ?>">
		</div>
		<?php } ?>			
			
			<form method = "post">
			<div class="input-div">
			<b>Title: </b><input type = "text" value = "<?php echo $lol['title']; ?>" name = "title" placeholder = "News Title"></br><br>
			</div>
			<div class="input-div">
			<b>Short Desc: </b><input type = "text" value = "<?php echo $lol['shortstory']; ?>" name = "shortstory" placeholder = "News Desc"></br><br>
			</div>
			<div class="input-div">
			<textarea type = "text" name = "longstory" cols="68" rows="10"><?php echo $lol['longstory']; ?></textarea></br>
			</div>
			<div class="input-div">
			<b>Author: </b><input type = "text" value = "<?php echo $lol['author']; ?>" disabled><br><br>
			</div><div class="input-div">
			<select name="topstory" style="font-size: 14px;">
			<?php 
				if ($handle = opendir('app/tpl/skins/Project Habbo/images/news'))
					{	
					while (false !== ($file = readdir($handle)))
						{
							if ($file == '.' || $file == '..')
							{
								continue;
							}		
							echo '<option value="' . $file . '"';
							if (isset($_POST['topstory']) && $_POST['topstory'] == $file)
								{
									echo ' selected';
								}
								echo '>' . $file . '</option>';
					}
				}
			?>
			</select></div>
			<div class="input-div">
			<input class="form" type = "submit" name = "topstory_view" value = "View Image">
			<input class="form" type = "submit" name = "submit">
			</form></div>
			<?php }
			else{
				die('Go away please.');
			}
			?>
