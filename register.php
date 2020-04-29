<?php include 'inc/header1.php'; ?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h1 class="mt-5">Online Exam System</h1>
			<p class="lead">MCQ Based Online Exam System!</p>
			<img src="images/FutureSkill-03.png" style="height: 55% ; width:24%;" />
		</div>

		<div class="col-lg-12">
			<div class="form-group">
				<label for="exampleInputName">Name</label>
				<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
				<small id="emailHelp" class="form-text text-muted">Enter your full name (Spaces allowed).</small>
			</div>
			<!--
			<div class="form-group">
				<label for="exampleInputusername">Select Course</label>
				<select class="form-control" id="userName" name="userName">
					<option value="">Select Course</option>
					<option value="AI">Artificial Intelligence</option>
					<option value="IOT">Internet Of Things</option>
				</select>
			</div>
			-->
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">

			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" name="password" id="password" class="form-control" placeholder="Password">
			</div>
			<button type="submit" id="registersubm" value="Signup" class="btn btn-warning">Submit</button>
			&nbsp;&nbsp;
			<a class="btn btn-outline-success" href="index.php">Already Registered? Login</a>
			</form>
			<br /><br />
			<span id="state"></span>
		</div>
	</div>
</div>
<?php include 'inc/footer.php'; ?>