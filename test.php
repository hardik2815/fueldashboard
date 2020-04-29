<?php include 'inc/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Question no. 1</h1>
            <br />
            <br />
        </div>
        <div class="col-lg-12">
            <form method="post" action="">
                <table>
                    <tr>
                        <td colspan="2">
                            <h3>Ques statement here:</h3>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" name="ans" class="form-check-input" value="" />
                                </label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <br />
                            <br>
                            <input type="submit" name="submit" class="btn btn-outline-primary" value="Next Question" />
                            <input type="hidden" name="quesnumber" value="" />
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