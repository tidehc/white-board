<?php
session_start();
session_destroy();
echo "You've been logged out sucessfully!";
?>
<meta HTTP-EQUIV="REFRESH" content="0; url=./index.php">