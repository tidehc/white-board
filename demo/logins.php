<?php
$username=$_POST['username'];
if ($username == 'admin'){
echo "<meta http-equiv='refresh' content='0; url=http://www.white-board.biz/demo/admin/'/>";
}
if ($username == 'user'){
echo "<meta http-equiv='refresh' content='0; url=http://www.white-board.biz/demo/user/'/>";
}
if ($username != 'user' AND $username != 'admin'){
echo "Please use either admin or user for your username to login to whiteboard demo.";
}
?>