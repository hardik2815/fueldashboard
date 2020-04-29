<?php include 'inc/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Start your exam</h1>
            <p class="lead">Choose a course</p><br>
            <div class="form-group">
                <label for="exampleInputCourse">Select a Course</label>
                <select class="form-control" id="course" name="course">
                    <option value="">Select Course</option>
                    <option value="AI">Artificial Intelligence</option>
                    <option value="IOT">Internet Of Things</option>
                </select>
            </div>
            <br />
            <br />

            <a href="starttest.php" class="btn btn-success btn-lg">
                <span class="fa fa-arrow-right"></span> Start Exam
            </a>
            <br />
            <br />
        </div>
    </div>
</div>

<?php include 'inc/footer.php'; ?>