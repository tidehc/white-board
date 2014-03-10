<?php

session_start();

$email = $_POST['email'];
$salt = "JIi7TjDeoyh5n7uoJDVTd4ykT4QWhvMA";
$unhash = $_POST['password'];
$tohash = $unhash . $salt;
$password = hash('whirlpool', $tohash);

if ($email&&$password)

{
	
 //MySQL Database Connect
 include './connect.php'; 
 
$query = mysql_query("SELECT * FROM users WHERE email='$email'");

$numrows = mysql_num_rows($query);	
if ($numrows!=0)
{

	while ($row = mysql_fetch_assoc($query))
{
		$dbemail = $row['email'];
		$dbpassword = $row['password'];

}

//performing check to match db
if ($email==$dbemail&&$password==$dbpassword)
{

	$_SESSION['email']=$email;
	echo "<head> <meta http-equiv='refresh' content='0; URL=./system/'> </head>";
	
	
}
else
	echo "<head> <meta http-equiv='refresh' content='0; URL=./index.php?txt=Password%20incorrect...'> </head>";



}
else
	die("<head> <meta http-equiv='refresh' content='0; URL=./index.php?txt=Email%20incorrect...'> </head>");
	
	
	
}
else
	die("<head> <meta http-equiv='refresh' content='0; URL=./index.php?txt=Both'> </head> ");

?>
