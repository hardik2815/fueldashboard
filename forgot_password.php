<?php include 'inc/header1.php'; ?>
<div class="col-lg-12 text-center">
    <h1 class="mt-5">Forgot Password</h1>
    <br>
</div>
<div class="col-lg-12">
    <form action="verify.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
        </div>
        <button type="submit" id="forgotpassword" value="forgotpassword" class="btn btn-warning">Submit</button>
        <br>
        <br>
    </form>
</div>


<?php include 'inc/footer.php'; ?>