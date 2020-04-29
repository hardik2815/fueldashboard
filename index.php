<?php include 'inc/header1.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h1 class="mt-5">Online Exam System</h1>
			<p class="lead">MCQ Based Online Exam System! <strong>Register now</strong> to start taking exam</p>
			<img src="images/FutureSkill-03.png" style="height: 256px; width: 256px;" />
		</div>

		<div class="col-lg-12">
			<form action="index.php" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" id="password" class="form-control" placeholder="Password">
				</div>
				<button type="submit" id="loginsubm" value="Signup" class="btn btn-warning">Submit</button>
				<br>
				<br>
				<a href="forgot_password.php">Forgot Password?</a>
			</form>
			<br />
			<p><a class="btn btn-outline-success btn-lg" href="register.php">New User? Signup for Free</a></p>

			<span class="empty" style="display: none;">Fields must not be empty</span>
			<span class="disable" style="display: none;">User ID Disable!</span>
			<span class="error" style="display: none;">Email or Password did not match.</span>
		</div>
	</div>
</div>

<?php include 'inc/footer.php'; ?>