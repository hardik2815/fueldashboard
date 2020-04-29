<?php include 'inc/header1.php'; ?>
<div class="col-lg-12 text-center">
    <h1 class="mt-5">Verify Account</h1>
    <p class="lead">Enter password to complete the process!</p>
    <br>
    <br>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 py-md-2 py-10"">
            <form action=" verify.php" method="post">
            <div class="form-group">

                <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
            </div>
            <div class="form-group">

                <input type="password" name="password" id="password" class="form-control" placeholder="Confirm password">
            </div>
            <button type="submit" id="forgotpassword" value="forgotpassword" class="btn btn-warning">Submit</button>
            <br>
            <br>
            </form>
        </div>
    </div>
</div>


<?php include 'inc/footer.php'; ?>