<h3 class="title txt">Manage Bnews</h3>
 <?php 
		if($_SESSION['user']['rank'] >= 7){
?>
	
		<table>
		  <tr>
			<th style = "width:110px;">Title</th>
			<th style = "width:130px;">Short Story</th>
			<th >Long Story</th>
			<th >Publish Date</th>
			<th >Edit</th>
			<th >Delete</th>
		  </tr>
		<?php
			$q = mysql_query("SELECT * FROM cms_news");
				while ($m = mysql_fetch_array($q)) { ?>
		  <tr align = "center">
			<td class="r"><?php echo $m['title']; ?></td>
			<td ><?php echo $m['shortstory']; ?></td>
			<td ><a href = "{url}/index.php?url=news&id=<?php echo $m['id'] ?>">View</a></td>
			<td ><?php echo(date("Y-m-d",$m['published'])); ?></td>
			<td ><a href = "{url}/index.php?url=hk&edit_news&id=<?php echo $m['id']; ?>"><img style = "height:18px;width:18px;" src = "{url}/app/tpl/skins/{skin}/images/edit.png"></td>
			<td ><a href = "{url}/index.php?url=hk&manage_news&delete&id=<?php echo $m['id']; ?>"><img src = "{url}/app/tpl/skins/{skin}/images/remove.png"></td>
		  </tr>
		  <?php } if(isset($_GET['delete'])){
			$q_ndel = "INSERT INTO hk_logs (type, time, who_done) VALUES('Delete News Article(" . $_GET['id'] . ")','". time() ."','{$_SESSION['user']['username']}')"; // LOG
			
			// Run Queries
			mysql_query("DELETE FROM cms_news WHERE id = '" . $_GET['id'] ."'");
			mysql_query($q_ndel);
			
			//Confirm Alert
			echo('<div class = "alert">Article Deleted successfully.<meta http-equiv="refresh" content="3;url={url}/index.php?url=hk&manage_news"/></div>');
			} 
		  ?>
		</table>
		<?php } else{die('Go away, this is for admins not noobs.');} ?>