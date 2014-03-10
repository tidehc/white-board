<?php
session_start();
if ($_SESSION['email'] == NULL){
	die("<head> <meta http-equiv='refresh' content='0; URL=../index.php?txt=Connection%20Timeout'></head>");}
else{
	//connect to db
	mysql_connect("127.0.0.1","whiteboard", "UmvfDEpSTrvCu0iiV5") OR DIE ('Unable to connect to database!');
	mysql_select_db("whiteboard") OR DIE ("Couldn't find Database!");	
	//set session name to username	
	$email = $_SESSION['email'];
	//query for id
	$query_user = mysql_query("SELECT * FROM users WHERE email='$email'");
	while($row = mysql_fetch_array( $query_user )) {
		$user_id = $row['id'];
		$user_firstName = $row['firstName'];
		$user_lastName = $row['lastName'];
		$user_email = $row['email'];
		$user_type = $row['type'];
	}
}
?>