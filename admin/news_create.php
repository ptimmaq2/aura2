<h3 class="title txt">Create Article</h3>
<style>
.blue-b {
background: #2A9CDE;
border:2px solid #53BDF9;
}
</style>
			<form style="position:relative;"method = "post">
			<div class="input-div">
			<b>Title: </b><input type = "text" name = "title" value = "<?php echo $_POST['title']?>" placeholder = "News Title"></br>
			</div>
			<div class="input-div">
			<b>Short Desc: </b><input type = "text" name = "shortstory" value = "<?php echo $_POST['shortstory']?>" name = "" placeholder = "News Desc"></br>
			</div>
			<div class="input-div">
			News content:
			<textarea  type = "text" class = "tinymce" name = "longstory" cols="68" rows="10"><?php echo $_POST['longstory']?></textarea></br>
			</div>
			<div class="input-div">
			<b>Author: </b><input type = "text" value = "<?php echo $_SESSION['user']['username']; ?>" disabled><br>
			</div>
			<div class="input-div">
			<select name="topstory" id="topstory" style="font-size: 14px;">
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
					<?php
		if($_SESSION['user']['rank'] >= 6){

		function secureStr($str) {
			return mysql_real_escape_string(stripslashes(htmlspecialchars($str)));
		}
		if(isset($_POST['news_create'])) {
			$title = secureStr($_POST['title']);
			$shortstory = secureStr($_POST['shortstory']);
			$longstory = secureStr($_POST['longstory']);
			$topstory = secureStr(mysql_real_escape_string($_POST['topstory']));
			
			if(empty($title)){
				echo '<div class = "alert">You have not entered a title??</div><br>';
			}
			
			else if(empty($shortstory)){
				echo '<div class = "alert">You have not entered a shortstory/news desc??</div><br>';
			}
			
			else if(empty($longstory)){
				echo '<div class = "alert">You have not entered a story??</div><br>';
			}
			
			else{
				$q = "INSERT INTO cms_news (title, shortstory, longstory, published, image, author) VALUES('{$title}','{$shortstory}','" . htmlspecialchars_decode($longstory) . "'," . time() . ",'{$topstory}','". $_SESSION['user']['username'] ."')";
				$q_nupdate = "INSERT INTO hk_logs (type, time, who_done) VALUES('News Article(" . $_POST['title'] .")','". time() ."','{$_SESSION['user']['username']}')";

				mysql_query($q) or die(mysql_error());
				mysql_query ($q_nupdate);
				echo "<div class = \"alert\">Article was created..</div><br>";
			}
		}
		else if($_POST['topstory_view']){ ?>
		<div class="input-div">
			<img src = "{url}/app/tpl/skins/Project Habbo/images/news/<?php echo $_POST['topstory']; ?>">
		</div>
		<?php } ?><br>
			<input class="form" type = "submit" name = "topstory_view" value = "View Image"><br>
			<input class="form blue-b"type = "submit" name = "news_create">
			</form>
			<script type="text/javascript">
				window.onload = function()
				{
					CKEDITOR.replace(\'editor1\'  );
				};	
			</script>
			<?php }
			else{
				die('Go away please.');
			}
			?>
