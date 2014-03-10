<?php include './header.php'; ?>
<?php include './mustbeadmin.php'; ?>
<?php $exists=$_GET['exists']?>
<h3 class="text-center">User Control</h3><br>
<h5 class="text-center">Creating a user</h5>
<hr>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form action="./user_create_run.php" method="POST">
    <div class="form-group">
        <input type="text" name="firstName" placeholder="First Name" class="form-control">
    </div>
    <div class="form-group">
        <input type="text" name="lastName" placeholder="Last Name" class="form-control">
    </div>
    <div class="form-group">
        <input type="text" name="email" placeholder="Email" class="form-control">
    </div>
    <div class="form-group">
        <input type="password" name="password_1" placeholder="Password" class="form-control">
    </div>
    <div class="form-group">
        <input type="password" name="password_2" placeholder="Password Confirm" class="form-control">
    </div>
    <hr>
    <div class="form-group">
        <p class="text-center">
            <input type="submit" class="btn btn-hg btn-primary btn-embossed mlm" value="Create">
            <a href="./users.php" class="btn btn-hg btn-danger btn-embossed mlm">Cancel</a>
        </p>
    </div>
</form>
</div>
<div class="col-md-3"></div>
</div><!--end row-->
<?php include './footer.php'; ?>