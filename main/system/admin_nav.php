<?php
$get_num_courses = mysql_query("SELECT * FROM courses");
$num_courses = mysql_num_rows($get_num_courses);
$get_num_users = mysql_query("SELECT * FROM users");
$num_users = mysql_num_rows($get_num_users);
?>
<li class="divider"></li>
            <li class="nav-header"><img src="./images/icons/shirt.svg" width="25px" height="25px"> Administration</li>
            <li>
              <a href="./users.php">
                <span class="fui-cmd"></span> Users
                <span class="btn btn-default btn-xs pull-right"><?php echo $num_users; ?></span>
              </a>
            </li>
            <li>
              <a href="#fakelink">
                <span class="fui-windows"></span> Courses
                <span class="btn btn-default btn-xs pull-right"><?php echo $num_courses; ?></span>
              </a>
            </li>