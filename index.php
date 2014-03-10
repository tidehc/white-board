<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Whiteboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="refresh" content="0; url=./main/" />
    <!-- Loading Bootstrap -->
    <link href="./demo/bootstrap/css/bootstrap.css" rel="stylesheet">
	  <link href="./demo/css/font-awesome.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="./demo/css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
	<style>
	.downer{
	position:relative;
	top:100px;
	}
	#background {
    width: 100%; 
    height: 100%; 
    position: fixed; 
    left: -500px; 
    top: -370px; 
    z-index: -1; /* Ensure div tag stays behind content; */
}

.stretch {
    width:150%;
    height:150%;
	  opacity:0.1;
}
	</style>
  </head>
  <body>
    <div class="container">
<?php include './header.php'; ?>
	 <h1 class="downer">Welcome to <div class="carousel-inner">
        <div class="item">
          easy
        </div>
        <div class="item">
          fun
        </div>
        <div class="item">
          new
        </div>
      </div></h1>
	 <h3 class="downer">Perform. Leave Learning Management to us.</h3>

    </div>
    <!-- /.container -->
<div id="background">
    <img src="./demo/images/logo/w.svg" class="stretch" alt="" />
</div>

    <!-- Load JS here for greater good =============================-->
    <script src="./demo/js/jquery-1.8.3.min.js"></script>
    <script src="./demo/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="./demo/js/jquery.ui.touch-punch.min.js"></script>
    <script src="./demo/js/bootstrap.min.js"></script>
    <script src="./demo/js/bootstrap-select.js"></script>
    <script src="./demo/js/bootstrap-switch.js"></script>
    <script src="./demo/js/flatui-checkbox.js"></script>
    <script src="./demo/js/flatui-radio.js"></script>
    <script src="./demo/js/jquery.tagsinput.js"></script>
    <script src="./demo/js/jquery.placeholder.js"></script> <script src="google.js"></script>
 <style type="text/css">
 .bottom{
  bottom:0px;
  width:100%;
  position:absolute;
 }
 </style>
 <div class="bottom-menu bottom-menu-large bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-2 navbar-brand">
            <p>Whiteboard <?php echo date("Y"); ?> &copy;</p>
          </div>

          <div class="col-md-2">
            <h5 class="title">About Us</h5>
            <ul class="bottom-links">
              <li><a href="./founder.php">Founder</a></li>
              <li><a href="./vision.php">Our Vision</a></li>
              <li><a href="./mission.php">Our Vision</a></li>
              <li><a href="./contact.php">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-md-2">
            <h5 class="title">Philosophy</h5>
            <ul class="bottom-links">
              <li><a href="./design.php">Design</a></li>
              <li><a href="./production.php">Production</a></li>
              <li><a href="./planning.php">Planning</a></li>
              <li><a href="./store.php">Store</a></li>
            </ul>
          </div>

          <div class="col-md-2">
            <h5 class="title">MAINFRAME</h5>
            <ul class="bottom-links">
              <li><a href="./jobs.php">Jobs</a></li>
              <li><a href="./privacy.php">Privacy</a></li>
              <li><a href="./terms.php">Terms of Use</a></li>
            </ul>
          </div>

          <div class="col-md-2">
            <h5 class="title">FOLLOW US</h5>
            <ul class="bottom-links">
              <li><a href="https://www.facebook.com/pages/Whiteboard/675521159153113" target="_blank">Facebook</a></li>
              <li><a href="https://twitter.com/WhiteBoard_biz" target="_blank">Twitter</a></li>
              <li><a href="#">Youtube</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div> <!-- /bottom-menu /large -->
  </body>
</html>
