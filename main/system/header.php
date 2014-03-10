<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include './checks.php'; ?>
    <meta charset="utf-8">
    <title>Whiteboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Loading Bootstrap -->
    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <!-- Loading Flat UI -->
    <link href="./css/flat-ui.css" rel="stylesheet">
    <link rel="shortcut icon" href="./images/favicon.ico">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
<div class="row">
  <div class="col-md-2">
    <br><br><img class="up" src="./images/whiteboard_logo.png" width="100%"><hr>
         <ul class="nav nav-list">
          <li>Welcome back <?php echo $user_firstName; ?></li>
          <li class="divider"></li>
            <li class="nav-header"><img src="./images/icons/mortarboard.svg" width="30px" height="30px"> Learning</li>
            <li>
              <a href="./index.php">
                <span class="fui-home"></span> Home
              </a>
            </li>
            <li>
              <a href="./search_courses.php">
                <span class="fui-search"></span> Find Courses
              </a>
            </li>
            <li>
              <a href="./courses.php">
                <span class="fui-book"></span> Your Courses
              </a>
            </li>
            <li>
              <a href="./transcripts.php">
                <span class="fui-document"></span> Scores
              </a>
            </li>
            <?php 
            if ($user_type == 2){
              include './admin_nav.php';
            }
            ?>
            <li class="divider"></li>
            <li class="nav-header"><img src="./images/icons/settings.svg" width="25px" height="25px"> Settings</li>
            <li>
              <a href="#fakelink">
                <span class="fui-user"></span> Your Profile
              </a>
            </li>
            <li> 
              <a href="#fakelink">
               <span class="fui-chat"></span> Messages
                <span class="btn btn-default btn-xs pull-right">0</span>
              </a>
            </li>
            <li>
              <a href="./logout.php">
                <span class="fui-exit"></span> Logout
              </a>
            </li>
          </ul>
      </div><!-- end col -->
      <div class="col-md-10"><br>