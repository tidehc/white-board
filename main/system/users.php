<?php include './header.php'; ?>
<?php include './mustbeadmin.php'; ?>
<h3 class="text-center">User Control</h3><br>
<h5 class="text-center">Please make a selection</h5>
<hr>
<div class="row">
    <style type="text/css">
    .fade{
        opacity:0.6;
    }
    </style>
    <div class="col-md-4">
	    <a href="./user_create.php">
            <nav class="navbar navbar-default navbar-lg" role="navigation">
                <br><h3 class="text-center">
                <span class="fa-stack fa-lg">
                <i class="fa fa-user fa-stack-2x"></i>
                <i class="fa fa-plus-circle fa-stack-2x text-success fade"></i>
                </span>
                <br>Create User</h3><br><br>
            </nav>
        </a>
    </div><!--end col-4-->
    <div class="col-md-4">
       <a href="./user_modify.php">
            <nav class="navbar navbar-default navbar-lg" role="navigation">
                <br><h3 class="text-center">
                <span class="fa-stack fa-lg">
                <i class="fa fa-user fa-stack-2x"></i>
                <i class="fa fa-gears fa-stack-2x text-info fade"></i>
                </span>
                <br>Modify User</h3><br><br>
            </nav>
        </a>
    </div><!--end col-4-->
    <div class="col-md-4">
       <a href="./user_terminate.php">
            <nav class="navbar navbar-default navbar-lg" role="navigation">
                <br><h3 class="text-center">
              <span class="fa-stack fa-lg">
                <i class="fa fa-user fa-stack-2x"></i>
                <i class="fa fa-ban fa-stack-2x text-danger fade"></i>
            </span>
                <br>Terminate User</h3><br><br>
            </nav>
        </a>
    </div><!--end col-4-->
</div><!--end row-->
<?php include './footer.php'; ?>