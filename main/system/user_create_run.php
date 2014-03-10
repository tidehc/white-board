<?php include './header.php'; ?>
<?php include './mustbeadmin.php'; ?>
<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password_1 = $_POST['password_1'];
$password_2 = $_POST['password_2'];

$query = mysql_query("SELECT * FROM users WHERE email='$email'");
	if(mysql_num_rows($query) != 0)
	{
	?>
	<HEAD><meta http-equiv="REFRESH" content="0;url=./user_create.php?exists=1"></HEAD>
	<?php
	}
	else
	{
	mysql_query("INSERT INTO users (id, username, password, active) 
	VALUES (NULL, '$username', '$password', '$active')");
	$query_userid = mysql_query("SELECT * FROM users WHERE username='$username'");
	while($row = mysql_fetch_array( $query_userid )) {
		$idforcargo = $row['id'];
		}
?>
<?php include './footer.php'; ?>