<?php$con = mysql_connect("localhost","root","harrypotter7");
Mysql_Select_db("hotel1", $con);


$q = mysql_query("SELECT * FROM server_status");
while($row = mysql_fetch_assoc($q)){
echo $row['users_online'];
}
?>