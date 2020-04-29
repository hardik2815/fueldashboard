<?php include 'inc/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Update Profile</h1>

            <br />
        </div>
        <div class="col-lg-12">
            <form action="" method="post">
                <table align="center">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" value="" id="name"></td>
                    </tr>
                    <tr>
                        <td>User Name </td>
                        <td><input type="text" name="userName" value="" id="userName"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input name="email" type="email" value="" id="email"></td>
                    </tr>

                    <tr>
                        <td></td>

                        <td><input type="submit" id="profileUpdate" class="btn btn-primary" value="Update">
                        </td>
                    </tr>
                </table>
            </form>
            <br />
            <br />
        </div>
    </div>
</div>
<?php include 'inc/footer.php'; ?>