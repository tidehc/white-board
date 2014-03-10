
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Whiteboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php $txt = $_GET['txt']; ?>
    <!-- Loading Bootstrap -->
    <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="./css/font-awesome.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="./css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="./images/favicon.ico">

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
    left: 0px; 
    top: 0px; 
    z-index: -1; /* Ensure div tag stays behind content; -999 might work, too. */
}

.stretch {
    width:100%;
    height:100%;
	opacity:0.2;
}
	</style>
  </head>
  <body><br><br><br>
    <div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="dialog dialog-info">
					<h3><img class="up" src="./images/icons/lock.svg" height="60px"> Whiteboard</h3>
					<h4 class="text-muted"><?php echo $txt; ?></h4>
					<form class="form-horizontal" method="post" action="logins.php">
					<div class="form-group">
						<div class="col-md-2">
						</div>
						<div class="col-md-8">
						<input type="text" placeholder="Email" name="email" class="form-control flat input-md">
						</div>
						<div class="col-md-2">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-2">
						</div>
						<div class="col-md-8">
						<input type="password" placeholder="Password" name="password" class="form-control flat input-md">
						</div>
						<div class="col-md-2">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-3">
						</div>
						<div class="col-md-3">
						<input type="submit" class="btn btn-embossed btn-primary" value="Login">
						</div>
						<div class="col-md-3">
						<a class="btn btn-embossed btn-inverse" href="./login_help.php">Help</a>
						</div>
						<div class="col-md-3">
						</div>
					</div>
					</form>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
		
	</div><!-- /.container -->

<div id="background">
    <img src="images/logo/w.svg" class="stretch" alt="" />
</div>
    <!-- Load JS here for greater good =============================-->
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/bootstrap-switch.js"></script>
    <script src="js/flatui-checkbox.js"></script>
    <script src="js/flatui-radio.js"></script>
    <script src="js/jquery.tagsinput.js"></script>
    <script src="js/jquery.placeholder.js"></script> <script src="google.js"></script>
  </body>
</html>
